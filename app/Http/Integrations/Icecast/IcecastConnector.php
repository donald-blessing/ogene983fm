<?php

declare(strict_types=1);

namespace App\Http\Integrations\Icecast;

use Saloon\Http\Connector;
use Saloon\Traits\Plugins\AcceptsJson;

class IcecastConnector extends Connector
{
    use AcceptsJson;

    /**
     * The Base URL of the API
     */
    public function resolveBaseUrl(): string
    {
        return (string) config('services.icecast.url');
    }

    /**
     * Default headers for every request
     */
    protected function defaultHeaders(): array
    {
        return [];
    }
}
