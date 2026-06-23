<?php

declare(strict_types=1);

namespace App\Filament\Resources\SongOfTheWeek\SongOfTheWeeks\Pages;

use App\Filament\Resources\SongOfTheWeek\SongOfTheWeeks\SongOfTheWeekResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditSongOfTheWeek extends EditRecord
{
    protected static string $resource = SongOfTheWeekResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
