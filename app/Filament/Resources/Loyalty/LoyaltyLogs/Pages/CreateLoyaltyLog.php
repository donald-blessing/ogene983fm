<?php

declare(strict_types=1);

namespace App\Filament\Resources\Loyalty\LoyaltyLogs\Pages;

use App\Filament\Resources\Loyalty\LoyaltyLogs\LoyaltyLogResource;
use Filament\Resources\Pages\CreateRecord;

class CreateLoyaltyLog extends CreateRecord
{
    protected static string $resource = LoyaltyLogResource::class;
}
