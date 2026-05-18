<?php

declare(strict_types=1);

namespace App\Livewire;

use App\Models\Programme\Programme;
use Livewire\Component;

class PersistentPlayer extends Component
{
    public string $streamUrl = 'https://ogene983fm.radio12345.com/;';
    public ?Programme $currentProgramme = null;

    public function mount()
    {
        $this->currentProgramme = Programme::onAir()->orderBy('id', 'desc')->first();
    }

    public function render()
    {
        return view('livewire.persistent-player');
    }
}
