<?php

declare(strict_types=1);

namespace App\Http\Controllers\Monetization;

use App\Http\Controllers\Controller;
use App\Models\Monetization\Sponsorship;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class SponsorshipTrackingController extends Controller
{
    /**
     * Handle sponsorship click tracking and redirect to target URL.
     */
    public function trackClick(Sponsorship $sponsorship): RedirectResponse
    {
        $sponsorship->increment('clicks');

        if ($sponsorship->link) {
            return redirect()->away($sponsorship->link);
        }

        return redirect()->back();
    }

    /**
     * Handle sponsorship impression tracking via AJAX.
     */
    public function trackImpression(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'ids' => ['required', 'array'],
            'ids.*' => ['exists:sponsorships,id'],
        ]);

        Sponsorship::whereIn('id', $validated['ids'])->increment('impressions');

        return response()->json(['success' => true]);
    }
}
