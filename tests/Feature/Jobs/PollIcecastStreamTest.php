<?php

declare(strict_types=1);

namespace Tests\Feature\Jobs;

use App\Events\NowPlayingUpdated;
use App\Jobs\PollIcecastStream;
use App\Services\IcecastService;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Event;
use Mockery;
use Tests\TestCase;

class PollIcecastStreamTest extends TestCase
{
    public function test_it_dispatches_event_when_song_changes(): void
    {
        Event::fake();
        Cache::flush();

        $stats = [
            'listeners' => 10,
            'current_song' => 'New Song',
            'genre' => 'Afrobeat',
            'title' => 'Ogene FM',
            'description' => 'Desc',
        ];

        $service = Mockery::mock(IcecastService::class);
        $service->shouldReceive('getStreamStats')->once()->andReturn($stats);

        $job = new PollIcecastStream;
        $job->handle($service);

        Event::assertDispatched(NowPlayingUpdated::class, function ($event) use ($stats) {
            return $event->stats === $stats;
        });

        $this->assertEquals('New Song', Cache::get('icecast_last_song'));
    }

    public function test_it_does_not_dispatch_event_when_song_is_same(): void
    {
        Event::fake();
        Cache::put('icecast_last_song', 'Same Song');

        $stats = [
            'listeners' => 10,
            'current_song' => 'Same Song',
            'genre' => 'Afrobeat',
            'title' => 'Ogene FM',
            'description' => 'Desc',
        ];

        $service = Mockery::mock(IcecastService::class);
        $service->shouldReceive('getStreamStats')->once()->andReturn($stats);

        $job = new PollIcecastStream;
        $job->handle($service);

        Event::assertNotDispatched(NowPlayingUpdated::class);
    }
}
