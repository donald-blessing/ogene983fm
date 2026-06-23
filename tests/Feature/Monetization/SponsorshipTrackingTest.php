<?php

declare(strict_types=1);

namespace Tests\Feature\Monetization;

use App\Models\Monetization\Sponsorship;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SponsorshipTrackingTest extends TestCase
{
    use RefreshDatabase;

    public function test_it_tracks_clicks_and_redirects(): void
    {
        $sponsorship = Sponsorship::factory()->create([
            'link' => 'https://example.com',
            'clicks' => 0,
        ]);

        $response = $this->get(route('monetization.track-click', $sponsorship));

        $response->assertRedirect('https://example.com');
        $this->assertEquals(1, $sponsorship->fresh()->clicks);
    }

    public function test_it_tracks_impressions(): void
    {
        $sponsorship1 = Sponsorship::factory()->create(['impressions' => 0]);
        $sponsorship2 = Sponsorship::factory()->create(['impressions' => 0]);

        $response = $this->postJson(route('monetization.track-impression'), [
            'ids' => [$sponsorship1->id, $sponsorship2->id],
        ]);

        $response->assertOk();
        $this->assertEquals(1, $sponsorship1->fresh()->impressions);
        $this->assertEquals(1, $sponsorship2->fresh()->impressions);
    }

    public function test_it_validates_impression_tracking(): void
    {
        $response = $this->postJson(route('monetization.track-impression'), [
            'ids' => [999], // non-existent
        ]);

        $response->assertStatus(422);
    }
}
