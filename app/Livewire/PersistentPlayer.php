<?php

declare(strict_types=1);

namespace App\Livewire;

use App\Models\Programme\Programme;
use App\Settings\GeneralSettings;
use Livewire\Attributes\On;
use Livewire\Component;

class PersistentPlayer extends Component
{
    public string $streamUrl;

    public $currentProgramme = null;

    public ?string $currentSong = null;

    public ?string $currentCover = null;

    public function mount(GeneralSettings $settings)
    {
        $this->streamUrl = $settings->stream_url;
        $this->loadCurrentProgramme();
    }

    public function loadCurrentProgramme()
    {
        $programme = Programme::onAir()->orderBy('id', 'desc')->first();

        if ($programme) {
            $this->currentProgramme = [
                'title' => $programme->title,
                'coverImage' => $programme->coverImage,
            ];
        }
    }

    /**
     * Listen for Schedule-based updates (from Programme model)
     */
    #[On('echo:radio-station,.programme.updated')]
    public function updateProgramme($event)
    {
        $this->currentProgramme = [
            'title' => $event['programmeTitle'],
            'coverImage' => $event['coverImageUrl'],
        ];
    }

    /**
     * Listen for Stream-based metadata updates (from Icecast polling)
     */
    #[On('echo:now-playing,NowPlayingUpdated')]
    public function updateNowPlaying($event)
    {
        $this->currentSong = $event['stats']['current_song'] ?? null;
    }

    public function render()
    {
        return view('livewire.persistent-player');
    }
}
