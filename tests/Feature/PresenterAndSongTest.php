<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Models\Presenter\Presenter;
use App\Models\SongOfTheWeek\SongOfTheWeek;
use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\Attributes\Test;
use Tests\TestCase;

class PresenterAndSongTest extends TestCase
{
    use RefreshDatabase;

    #[Test]
    public function public_can_view_presenters_index(): void
    {
        Presenter::factory()->count(3)->create();

        $response = $this->get(route('presenter.index'));

        $response->assertStatus(200);
    }

    #[Test]
    public function public_can_view_a_song_of_the_week_detail_page(): void
    {
        $song = SongOfTheWeek::factory()->create([
            'title' => 'Eastern Vibrations',
            'slug' => 'eastern-vibrations',
            'artist' => 'The Ogene Kings',
            'album' => 'Voice of the People',
        ]);

        $response = $this->get(route('songoftheweek.show', $song));

        $response->assertOk()->assertSee('Eastern Vibrations')->assertSee('The Ogene Kings');
    }
}
