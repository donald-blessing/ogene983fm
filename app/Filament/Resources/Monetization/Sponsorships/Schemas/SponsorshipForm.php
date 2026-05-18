<?php

declare(strict_types=1);

namespace App\Filament\Resources\Monetization\Sponsorships\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class SponsorshipForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                TextInput::make('link')
                    ->url()
                    ->maxLength(255),
                DateTimePicker::make('start_time')
                    ->required(),
                DateTimePicker::make('end_time')
                    ->required(),
                Toggle::make('is_active')
                    ->required()
                    ->default(true),
                SpatieMediaLibraryFileUpload::make('banner')
                    ->collection('banners')
                    ->image()
                    ->imageEditor()
                    ->columnSpanFull(),
            ]);
    }
}
