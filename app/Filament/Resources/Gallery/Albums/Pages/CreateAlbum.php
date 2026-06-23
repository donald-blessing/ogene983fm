<?php

declare(strict_types=1);

namespace App\Filament\Resources\Gallery\Albums\Pages;

use App\Filament\Resources\Gallery\Albums\AlbumResource;
use Filament\Resources\Pages\CreateRecord;

class CreateAlbum extends CreateRecord
{
    protected static string $resource = AlbumResource::class;
}
