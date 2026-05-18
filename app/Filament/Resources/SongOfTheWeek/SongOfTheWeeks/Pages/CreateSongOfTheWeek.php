<?php

namespace App\Filament\Resources\SongOfTheWeek\SongOfTheWeeks\Pages;

use App\Filament\Resources\SongOfTheWeek\SongOfTheWeeks\SongOfTheWeekResource;
use Filament\Resources\Pages\CreateRecord;

class CreateSongOfTheWeek extends CreateRecord
{
    protected static string $resource = SongOfTheWeekResource::class;
}
