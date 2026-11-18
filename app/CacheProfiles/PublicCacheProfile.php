<?php

declare(strict_types=1);

namespace App\CacheProfiles;

use Illuminate\Http\Request;
use Illuminate\Support\ViewErrorBag;
use Spatie\ResponseCache\CacheProfiles\CacheAllSuccessfulGetRequests;

/**
 * Caches public GET pages, but never a page that is about to show a flash
 * message or validation errors. Without this, the redirect back to a form
 * would be served from cache and swallow the success/error banner.
 */
class PublicCacheProfile extends CacheAllSuccessfulGetRequests
{
    public function shouldCacheRequest(Request $request): bool
    {
        if ($request->user() !== null) {
            return false;
        }

        if (! parent::shouldCacheRequest($request)) {
            return false;
        }

        $session = $request->session();

        if ($session->has('success') || $session->has('error')) {
            return false;
        }

        $errors = $session->get('errors');

        if (! $errors instanceof ViewErrorBag) {
            return $errors === null;
        }

        foreach ($errors->getBags() as $bag) {
            if ($bag->any()) {
                return false;
            }
        }

        return true;
    }
}
