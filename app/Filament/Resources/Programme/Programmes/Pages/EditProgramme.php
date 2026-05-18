<?php

namespace App\Filament\Resources\Programme\Programmes\Pages;

use App\Filament\Resources\Programme\Programmes\ProgrammeResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditProgramme extends EditRecord
{
    protected static string $resource = ProgrammeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
