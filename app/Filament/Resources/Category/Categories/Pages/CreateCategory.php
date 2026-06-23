<?php

declare(strict_types=1);

namespace App\Filament\Resources\Category\Categories\Pages;

use App\Filament\Resources\Category\Categories\CategoryResource;
use Filament\Resources\Pages\CreateRecord;

class CreateCategory extends CreateRecord
{
    protected static string $resource = CategoryResource::class;
}
