<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Models\Presenter\Presenter;
use App\Models\SongOfTheWeek\SongOfTheWeek;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PresenterAndSongTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function public_can_view_presenters_index(): void
    {
        Presenter::factory()->count(3)->create();

        $response = $this->get(route('presenter.index'));

        $response->assertStatus(200);
    }
}
