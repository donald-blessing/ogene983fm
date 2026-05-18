<?php

declare(strict_types=1);

namespace App\Listeners;

use App\Services\LoyaltyService;
use Illuminate\Auth\Events\Authenticated;

class AwardLoyaltyPoints
{
    /**
     * Create the event listener.
     */
    public function __construct(
        protected LoyaltyService $loyaltyService
    ) {}

    /**
     * Handle the event.
     */
    public function handle(Authenticated $event): void
    {
        $this->loyaltyService->awardDailyLoginPoints($event->user);
    }
}
