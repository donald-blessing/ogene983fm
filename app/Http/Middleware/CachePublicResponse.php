<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\ViewErrorBag;
use Spatie\ResponseCache\Middlewares\CacheResponse;
use Symfony\Component\HttpFoundation\Response;

/**
 * Never serve or store a cached page when the request carries a flash
 * message or validation errors. The package checks its cache before it
 * asks the cache profile, so the only reliable place to skip a hit is
 * before the lookup happens.
 */
class CachePublicResponse extends CacheResponse
{
    public function handle(Request $request, Closure $next, ...$args): Response
    {
        if ($this->hasTransientSessionData($request)) {
            return $next($request);
        }

        return parent::handle($request, $next, ...$args);
    }

    private function hasTransientSessionData(Request $request): bool
    {
        if (! $request->hasSession()) {
            return false;
        }

        $session = $request->session();

        if ($session->has('success') || $session->has('error')) {
            return true;
        }

        $errors = $session->get('errors');

        if (! $errors instanceof ViewErrorBag) {
            return $errors !== null;
        }

        // Named bags (e.g. the footer newsletter) are not covered by
        // ViewErrorBag::any(), which only inspects the default bag.
        foreach ($errors->getBags() as $bag) {
            if ($bag->any()) {
                return true;
            }
        }

        return false;
    }
}
