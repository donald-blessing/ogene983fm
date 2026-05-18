<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Models\Programme\Programme;
use App\Models\Programme\ProgrammeTime;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProgrammeTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function public_can_view_programmes_index(): void
    {
        $time = ProgrammeTime::factory()->create();
        $programme = Programme::factory()->create();
        $programme->programmeTimes()->attach($time);

        $response = $this->get(route('programme.index'));

        $response->assertStatus(200);
    }
}
