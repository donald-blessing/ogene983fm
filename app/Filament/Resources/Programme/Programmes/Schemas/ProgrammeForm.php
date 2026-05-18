<?php

declare(strict_types=1);

namespace App\Filament\Resources\Programme\Programmes\Schemas;

use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Set;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class ProgrammeForm
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
                RichEditor::make('description')
                    ->required()
                    ->columnSpanFull(),
                Select::make('presenters')
                    ->multiple()
                    ->relationship('presenters', 'name')
                    ->preload(),
                SpatieMediaLibraryFileUpload::make('cover_image')
                    ->collection('cover_images')
                    ->image()
                    ->imageEditor()
                    ->columnSpanFull(),
            ]);
    }
}
