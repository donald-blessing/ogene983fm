<?php

declare(strict_types=1);

namespace App\Filament\Resources\Programme\Episodes\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class EpisodeForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('programme_id')
                    ->relationship('programme', 'title')
                    ->required()
                    ->preload(),
                TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                Textarea::make('description')
                    ->columnSpanFull(),
                TextInput::make('duration')
                    ->placeholder('e.g. 45:20'),
                DateTimePicker::make('published_at')
                    ->default(now()),
                SpatieMediaLibraryFileUpload::make('audio')
                    ->collection('audio')
                    ->acceptedFileTypes(['audio/mpeg', 'audio/wav', 'audio/ogg'])
                    ->columnSpanFull(),
            ]);
    }
}
