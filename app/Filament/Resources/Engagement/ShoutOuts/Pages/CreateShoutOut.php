<?php

declare(strict_types=1);

namespace App\Filament\Resources\Engagement\ShoutOuts\Pages;

use App\Filament\Resources\Engagement\ShoutOuts\ShoutOutResource;
use Filament\Resources\Pages\CreateRecord;

class CreateShoutOut extends CreateRecord
{
    protected static string $resource = ShoutOutResource::class;
}
