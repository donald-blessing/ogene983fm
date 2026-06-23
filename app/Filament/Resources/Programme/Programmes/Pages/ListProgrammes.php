<?php

declare(strict_types=1);

namespace App\Filament\Resources\Programme\Programmes\Pages;

use App\Filament\Resources\Programme\Programmes\ProgrammeResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListProgrammes extends ListRecords
{
    protected static string $resource = ProgrammeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
