<?php

declare(strict_types=1);

namespace App\Filament\Resources\Category\Categories\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Set;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class CategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
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
                Select::make('category_id')
                    ->label('Parent Category')
                    ->relationship('parentCategory', 'name')
                    ->searchable()
                    ->preload()
                    ->nullable(),
                SpatieMediaLibraryFileUpload::make('cover_image')
                    ->collection('cover_images')
                    ->image()
                    ->imageEditor()
                    ->columnSpanFull(),
            ]);
    }
}
