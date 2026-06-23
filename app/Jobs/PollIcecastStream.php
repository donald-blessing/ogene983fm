<?php

declare(strict_types=1);

namespace App\Jobs;

use App\Events\NowPlayingUpdated;
use App\Services\IcecastService;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\Cache;

class PollIcecastStream implements ShouldQueue
{
    use Queueable;

    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(IcecastService $icecastService): void
    {
        $stats = $icecastService->getStreamStats();

        if (! $stats) {
            return;
        }

        $currentSong = $stats['current_song'] ?? '';
        $lastSong = Cache::get('icecast_last_song');

        // Check if song changed or if we don't have a last song yet
        if ($currentSong !== $lastSong) {
            Cache::put('icecast_last_song', $currentSong);

            // Broadcast the event
            NowPlayingUpdated::dispatch($stats);
        }
    }
}
