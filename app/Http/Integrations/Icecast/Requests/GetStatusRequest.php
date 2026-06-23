<?php

declare(strict_types=1);

namespace App\Http\Integrations\Icecast\Requests;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetStatusRequest extends Request
{
    /**
     * The HTTP method of the request
     */
    protected Method $method = Method::GET;

    /**
     * The endpoint for the request
     */
    public function resolveEndpoint(): string
    {
        return '/status-json.xsl';
    }
}
