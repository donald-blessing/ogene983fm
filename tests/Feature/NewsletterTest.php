<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Http\Middleware\VerifyCsrfToken;
use App\Models\Newsletter\NewsletterSubscriber;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Spatie\Permission\Models\Role;
use Tests\TestCase;

class NewsletterTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        $this->withoutMiddleware(VerifyCsrfToken::class);
        Role::firstOrCreate(['name' => 'admin']);
    }

    /** @test */
    public function public_can_subscribe_to_newsletter(): void
    {
        $response = $this->post(route('newsletter.subscribe'), [
            'email' => 'subscriber@example.com',
        ]);

        $response->assertRedirect();
        $this->assertDatabaseHas('newsletter_subscribers', ['email' => 'subscriber@example.com']);
    }

    /** @test */
    public function only_admins_can_access_newsletter_dashboard(): void
    {
        /** @var User $admin */
        $admin = User::factory()->create();
        $admin->assignRole('admin');

        $this->actingAs($admin)->get(route('newsletter.dashboard'))->assertStatus(200);

        /** @var User $user */
        $user = User::factory()->create();
        $this->actingAs($user)->get(route('newsletter.dashboard'))->assertStatus(403);
    }

    /** @test */
    public function admin_can_delete_subscriber(): void
    {
        /** @var User $admin */
        $admin = User::factory()->create();
        $admin->assignRole('admin');

        $subscriber = NewsletterSubscriber::factory()->create();

        $this->actingAs($admin)->delete(route('newsletter.subscriber.delete', $subscriber->UUID));

        $this->assertDatabaseMissing('newsletter_subscribers', ['id' => $subscriber->id]);
    }
}
