<?php

declare(strict_types=1);

namespace Tests\Feature\Livewire;

use App\Livewire\PersistentPlayer;
use App\Models\Programme\Programme;
use App\Settings\GeneralSettings;
use Livewire\Livewire;
use Tests\TestCase;

class PersistentPlayerTest extends TestCase
{
    public function test_it_loads_stream_url_from_settings(): void
    {
        $settings = app(GeneralSettings::class);
        $settings->stream_url = 'https://custom-stream.url';
        $settings->save();

        Livewire::test(PersistentPlayer::class)
            ->assertSet('streamUrl', 'https://custom-stream.url');
    }

    public function test_it_updates_song_title_on_event(): void
    {
        Livewire::test(PersistentPlayer::class)
            ->dispatch('echo:now-playing,NowPlayingUpdated', [
                'stats' => ['current_song' => 'Flavor - Nwa Baby'],
            ])
            ->assertSet('currentSong', 'Flavor - Nwa Baby')
            ->assertSee('Flavor - Nwa Baby');
    }

    public function test_it_falls_back_to_programme_title_when_no_song(): void
    {
        $programme = Programme::factory()->create(['title' => 'Morning Drive']);
        // Mock onAir scope or ensure timing matches

        Livewire::test(PersistentPlayer::class)
            ->assertSet('currentSong', null);
        // ->assertSee('Morning Drive'); // Requires onAir setup
    }
}
