<?php

namespace App\Filament\Resources\Engagement\ShoutOuts\Pages;

use App\Filament\Resources\Engagement\ShoutOuts\ShoutOutResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListShoutOuts extends ListRecords
{
    protected static string $resource = ShoutOutResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
