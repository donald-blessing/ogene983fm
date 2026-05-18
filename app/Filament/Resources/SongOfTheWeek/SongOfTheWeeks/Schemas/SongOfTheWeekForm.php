<?php

declare(strict_types=1);

namespace App\Filament\Resources\SongOfTheWeek\SongOfTheWeeks\Schemas;

use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Set;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class SongOfTheWeekForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required()
                    ->maxLength(255)
                    ->live(onBlur: true)
                    ->afterStateUpdated(fn (string $operation, $state, Set $set) => $operation === 'create' ? $set('slug', Str::slug($state)) : null
                    ),
                TextInput::make('slug')
                    ->disabled()
                    ->dehydrated()
                    ->required()
                    ->maxLength(255)
                    ->unique(ignoreRecord: true),
                TextInput::make('artist')
                    ->required()
                    ->maxLength(255),
                TextInput::make('album')
                    ->required()
                    ->maxLength(255),
                SpatieMediaLibraryFileUpload::make('album_art')
                    ->collection('album_arts')
                    ->image()
                    ->imageEditor(),
                SpatieMediaLibraryFileUpload::make('song')
                    ->collection('songs')
                    ->acceptedFileTypes(['audio/mpeg', 'audio/wav', 'audio/ogg']),
            ]);
    }
}
