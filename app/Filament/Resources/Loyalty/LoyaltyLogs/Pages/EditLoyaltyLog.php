<?php

namespace App\Filament\Resources\Loyalty\LoyaltyLogs\Pages;

use App\Filament\Resources\Loyalty\LoyaltyLogs\LoyaltyLogResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditLoyaltyLog extends EditRecord
{
    protected static string $resource = LoyaltyLogResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
