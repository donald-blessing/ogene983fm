<?php

declare(strict_types=1);

namespace App\Filament\Resources\Gallery\Albums\Pages;

use App\Filament\Resources\Gallery\Albums\AlbumResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditAlbum extends EditRecord
{
    protected static string $resource = AlbumResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
