<?php

declare(strict_types=1);

namespace App\Filament\Resources\Gallery\Albums\Pages;

use App\Filament\Resources\Gallery\Albums\AlbumResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAlbums extends ListRecords
{
    protected static string $resource = AlbumResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
