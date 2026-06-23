<?php

declare(strict_types=1);

namespace App\Filament\Resources\SongOfTheWeek\SongOfTheWeeks;

use App\Filament\Resources\SongOfTheWeek\SongOfTheWeeks\Pages\CreateSongOfTheWeek;
use App\Filament\Resources\SongOfTheWeek\SongOfTheWeeks\Pages\EditSongOfTheWeek;
use App\Filament\Resources\SongOfTheWeek\SongOfTheWeeks\Pages\ListSongOfTheWeeks;
use App\Filament\Resources\SongOfTheWeek\SongOfTheWeeks\Schemas\SongOfTheWeekForm;
use App\Filament\Resources\SongOfTheWeek\SongOfTheWeeks\Tables\SongOfTheWeeksTable;
use App\Models\SongOfTheWeek\SongOfTheWeek;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class SongOfTheWeekResource extends Resource
{
    protected static ?string $model = SongOfTheWeek::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return SongOfTheWeekForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SongOfTheWeeksTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListSongOfTheWeeks::route('/'),
            'create' => CreateSongOfTheWeek::route('/create'),
            'edit' => EditSongOfTheWeek::route('/{record}/edit'),
        ];
    }
}
