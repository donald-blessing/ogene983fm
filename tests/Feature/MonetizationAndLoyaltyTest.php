<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Models\Category\Category;
use App\Models\Monetization\Sponsorship;
use App\Models\Post\Post;
use App\Models\User;
use App\Services\LoyaltyService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Event;
use Illuminate\Auth\Events\Authenticated;
use Tests\TestCase;

class MonetizationAndLoyaltyTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function user_earns_points_on_daily_login(): void
    {
        $user = User::factory()->create(['loyalty_points' => 0]);

        // Simulate login event
        event(new Authenticated('web', $user));

        $this->assertEquals(LoyaltyService::DAILY_LOGIN, $user->refresh()->loyalty_points);
        $this->assertDatabaseHas('loyalty_logs', [
            'user_id' => $user->id,
            'action_type' => 'daily_login',
            'points' => LoyaltyService::DAILY_LOGIN,
        ]);
    }

    /** @test */
    public function user_does_not_earn_daily_points_twice_a_day(): void
    {
        $user = User::factory()->create(['loyalty_points' => 0]);

        // First login
        event(new Authenticated('web', $user));
        $this->assertEquals(LoyaltyService::DAILY_LOGIN, $user->refresh()->loyalty_points);

        // Second login same day
        event(new Authenticated('web', $user));
        $this->assertEquals(LoyaltyService::DAILY_LOGIN, $user->refresh()->loyalty_points);
        
        $this->assertCount(1, $user->loyaltyLogs()->where('action_type', 'daily_login')->get());
    }

    /** @test */
    public function user_earns_points_for_reading_a_post(): void
    {
        $user = User::factory()->create(['loyalty_points' => 100]);
        $category = Category::factory()->create();
        $post = Post::factory()->create(['category_id' => $category->id]);

        // Note: actingAs triggers Authenticated event (+10 points)
        $this->actingAs($user)->get(route('post.show', ['category' => $category->slug, 'post' => $post->slug]));

        $expectedPoints = 100 + LoyaltyService::DAILY_LOGIN + LoyaltyService::POST_READ;
        $this->assertEquals($expectedPoints, $user->refresh()->loyalty_points);
        
        $this->assertDatabaseHas('loyalty_logs', [
            'user_id' => $user->id,
            'action_type' => 'post_read',
            'reason' => "Read post #{$post->id}",
        ]);
    }

    /** @test */
    public function sponsorship_banner_displays_active_sponsorships(): void
    {
        $activeSponsorship = Sponsorship::factory()->create([
            'title' => 'Active Sponsor',
            'is_active' => true,
            'start_time' => now()->subHour(),
            'end_time' => now()->addHour(),
        ]);

        $inactiveSponsorship = Sponsorship::factory()->create([
            'title' => 'Inactive Sponsor',
            'is_active' => false,
        ]);

        $expiredSponsorship = Sponsorship::factory()->create([
            'title' => 'Expired Sponsor',
            'start_time' => now()->subDays(2),
            'end_time' => now()->subDay(),
        ]);

        $response = $this->get(route('post.index'));

        $response->assertStatus(200);
        $response->assertSee('Active Sponsor');
        $response->assertDontSee('Inactive Sponsor');
        $response->assertDontSee('Expired Sponsor');
    }
}
