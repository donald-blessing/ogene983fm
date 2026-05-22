<?php

declare(strict_types=1);

namespace App\Livewire;

use App\Models\Engagement\ShoutOut;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class VoiceRecorder extends Component
{
    use WithFileUploads;

    public $audioFile;
    public string $guestName = '';
    public bool $isSuccess = false;

    public function saveRecording($recordedBlob)
    {
        // This method will be called from Alpine.js with the base64 encoded audio
        // Actually, withWithFileUploads we can use standard upload logic
    }

    public function submit()
    {
        if (!Auth::check() && empty($this->guestName)) {
            $this->addError('guestName', 'Please enter your name.');
            return;
        }

        if (!$this->audioFile) {
            $this->addError('audioFile', 'No recording found.');
            return;
        }

        $shoutOut = ShoutOut::create([
            'user_id' => Auth::id(),
            'guest_name' => Auth::check() ? null : $this->guestName,
        ]);

        $shoutOut->addMedia($this->audioFile->getRealPath())
            ->toMediaCollection('audio');

        $this->isSuccess = true;
        $this->reset(['audioFile', 'guestName']);
    }

    public function render()
    {
        return view('livewire.voice-recorder');
    }
}
