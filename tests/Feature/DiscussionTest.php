<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Models\Discussion\Discussion;
use App\Models\Programme\Programme;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class DiscussionTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function public_can_view_discussions_index(): void
    {
        $programme = Programme::factory()->create();
        Discussion::factory()->count(3)->create(['programme_id' => $programme->id]);

        $response = $this->get(route('discussion.index'));

        $response->assertStatus(200);
    }
}
