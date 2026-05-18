<?php

namespace App\Filament\Resources\Loyalty\LoyaltyLogs\Pages;

use App\Filament\Resources\Loyalty\LoyaltyLogs\LoyaltyLogResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListLoyaltyLogs extends ListRecords
{
    protected static string $resource = LoyaltyLogResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
