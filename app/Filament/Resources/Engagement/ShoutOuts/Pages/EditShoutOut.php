<?php

namespace App\Filament\Resources\Engagement\ShoutOuts\Pages;

use App\Filament\Resources\Engagement\ShoutOuts\ShoutOutResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditShoutOut extends EditRecord
{
    protected static string $resource = ShoutOutResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
