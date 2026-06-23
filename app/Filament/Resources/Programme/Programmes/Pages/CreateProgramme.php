<?php

declare(strict_types=1);

namespace App\Filament\Resources\Programme\Programmes\Pages;

use App\Filament\Resources\Programme\Programmes\ProgrammeResource;
use Filament\Resources\Pages\CreateRecord;

class CreateProgramme extends CreateRecord
{
    protected static string $resource = ProgrammeResource::class;
}
