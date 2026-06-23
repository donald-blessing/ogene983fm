<?php

declare(strict_types=1);

namespace Tests\Feature\Services;

use App\Http\Integrations\Icecast\IcecastConnector;
use App\Http\Integrations\Icecast\Requests\GetStatusRequest;
use App\Services\IcecastService;
use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;
use Tests\TestCase;

class IcecastServiceTest extends TestCase
{
    public function test_it_can_fetch_and_parse_icecast_stats(): void
    {
        $mockClient = new MockClient([
            GetStatusRequest::class => MockResponse::make([
                'icestats' => [
                    'source' => [
                        'listeners' => 10,
                        'title' => 'Artist - Song Title',
                        'genre' => 'Afrobeat',
                        'server_name' => 'Ogene FM',
                        'server_description' => 'The sound of the people',
                    ],
                ],
            ], 200),
        ]);

        $connector = new IcecastConnector;
        $connector->withMockClient($mockClient);

        $service = new IcecastService($connector);
        $stats = $service->getStreamStats();

        $this->assertNotNull($stats);
        $this->assertEquals(10, $stats['listeners']);
        $this->assertEquals('Artist - Song Title', $stats['current_song']);
        $this->assertEquals('Afrobeat', $stats['genre']);
        $this->assertEquals('Ogene FM', $stats['title']);
    }

    public function test_it_handles_multiple_sources(): void
    {
        $mockClient = new MockClient([
            GetStatusRequest::class => MockResponse::make([
                'icestats' => [
                    'source' => [
                        [
                            'listeners' => 5,
                            'title' => 'First Source Song',
                        ],
                        [
                            'listeners' => 2,
                            'title' => 'Second Source Song',
                        ],
                    ],
                ],
            ], 200),
        ]);

        $connector = new IcecastConnector;
        $connector->withMockClient($mockClient);

        $service = new IcecastService($connector);
        $stats = $service->getStreamStats();

        $this->assertNotNull($stats);
        $this->assertEquals(5, $stats['listeners']);
        $this->assertEquals('First Source Song', $stats['current_song']);
    }

    public function test_it_handles_connection_failure(): void
    {
        $mockClient = new MockClient([
            GetStatusRequest::class => MockResponse::make([], 500),
        ]);

        $connector = new IcecastConnector;
        $connector->withMockClient($mockClient);

        $service = new IcecastService($connector);
        $stats = $service->getStreamStats();

        $this->assertNull($stats);
    }
}
