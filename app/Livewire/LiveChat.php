<?php

declare(strict_types=1);

namespace App\Livewire;

use App\Events\ChatMessageSent;
use App\Models\Monetization\PublicChatMessage;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;
use Livewire\Component;

class LiveChat extends Component
{
    public $messages = [];
    public string $newMessage = '';

    public function mount()
    {
        $this->messages = PublicChatMessage::with('user')
            ->latest()
            ->take(50)
            ->get()
            ->reverse()
            ->values()
            ->toArray();
    }

    public function sendMessage()
    {
        if (!Auth::check()) {
            return $this->redirect(route('login'));
        }

        $this->validate([
            'newMessage' => 'required|string|max:500',
        ]);

        $message = PublicChatMessage::create([
            'user_id' => Auth::id(),
            'message' => $this->newMessage,
        ]);

        broadcast(new ChatMessageSent($message))->toOthers();

        $this->messages[] = $message->load('user')->toArray();
        $this->newMessage = '';

        $this->dispatch('message-sent');
    }

    #[On('echo:radio-station,.chat.message.sent')]
    public function onMessageSent($event)
    {
        $message = PublicChatMessage::with('user')->find($event['message']['id']);
        if ($message) {
            $this->messages[] = $message->toArray();
        }
    }

    public function render()
    {
        return view('livewire.live-chat');
    }
}
