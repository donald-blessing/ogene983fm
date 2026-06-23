<?php

declare(strict_types=1);

namespace App\Services;

use App\Http\Integrations\Icecast\IcecastConnector;
use App\Http\Integrations\Icecast\Requests\GetStatusRequest;
use Exception;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class IcecastService
{
    public function __construct(
        protected IcecastConnector $connector
    ) {}

    /**
     * Get the current stream status.
     *
     * @return array{
     *     listeners: int,
     *     current_song: ?string,
     *     genre: ?string,
     *     title: ?string,
     *     description: ?string
     * }|null
     */
    public function getStreamStats(): ?array
    {
        try {
            $request = new GetStatusRequest;
            $response = $this->connector->send($request);

            if ($response->failed()) {
                Log::error('Icecast connection failed', [
                    'status' => $response->status(),
                    'body' => $response->body(),
                ]);

                return null;
            }

            $data = $response->json();
            $source = $this->parseSource($data);

            if (! $source) {
                return null;
            }

            return [
                'listeners' => (int) ($source['listeners'] ?? 0),
                'current_song' => $this->cleanSongTitle($source['title'] ?? null),
                'genre' => $source['genre'] ?? null,
                'title' => $source['server_name'] ?? null,
                'description' => $source['server_description'] ?? null,
            ];
        } catch (Exception $e) {
            Log::error('Icecast service error: '.$e->getMessage());

            return null;
        }
    }

    /**
     * Find the correct source from the Icecast JSON response.
     *
     * @param  array<string, mixed>  $data
     * @return array<string, mixed>|null
     */
    protected function parseSource(array $data): ?array
    {
        $icestats = $data['icestats'] ?? [];
        $source = $icestats['source'] ?? null;

        if (! $source) {
            return null;
        }

        if (isset($source[0]) && is_array($source[0])) {
            return $source[0];
        }

        return is_array($source) ? $source : null;
    }

    protected function cleanSongTitle(?string $title): ?string
    {
        if (empty($title)) {
            return null;
        }

        return trim($title);
    }

    /**
     * Fetch album art from iTunes Search API.
     */
    protected function fetchAlbumArt(?string $songTitle): ?string
    {
        if (empty($songTitle)) {
            return null;
        }

        try {
            $response = Http::timeout(3)->get('https://itunes.apple.com/search', [
                'term' => $songTitle,
                'media' => 'music',
                'limit' => 1,
            ]);

            if ($response->successful() && $response->json('resultCount') > 0) {
                $artworkUrl = $response->json('results.0.artworkUrl100');

                // Upgrade to higher resolution image
                return str_replace('100x100bb', '500x500bb', $artworkUrl);
            }
        } catch (Exception $e) {
            Log::warning('Failed to fetch album art: '.$e->getMessage());
        }

        return null;
    }
}
