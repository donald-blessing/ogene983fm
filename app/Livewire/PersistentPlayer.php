<?php

declare(strict_types=1);

namespace App\Livewire;

use App\Models\Programme\Programme;
use Livewire\Attributes\On;
use Livewire\Component;

class PersistentPlayer extends Component
{
    public string $streamUrl = 'https://ogene983fm.radio12345.com/;';
    public $currentProgramme = null;

    public function mount()
    {
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

    #[On('echo:radio-station,.programme.updated')]
    public function updateNowPlaying($event)
    {
        $this->currentProgramme = [
            'title' => $event['programmeTitle'],
            'coverImage' => $event['coverImageUrl'],
        ];
    }

    public function render()
    {
        return view('livewire.persistent-player');
    }
}
