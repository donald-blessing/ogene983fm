<?php

declare(strict_types=1);

namespace App\Filament\Resources\SongOfTheWeek\SongOfTheWeeks\Pages;

use App\Filament\Resources\SongOfTheWeek\SongOfTheWeeks\SongOfTheWeekResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListSongOfTheWeeks extends ListRecords
{
    protected static string $resource = SongOfTheWeekResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
