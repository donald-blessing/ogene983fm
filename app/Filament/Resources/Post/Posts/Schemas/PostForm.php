<?php

declare(strict_types=1);

namespace App\Filament\Resources\Post\Posts\Schemas;

use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Set;
use Filament\Schemas\Schema;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PostForm
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
                Select::make('category_id')
                    ->relationship('category', 'name')
                    ->required()
                    ->searchable()
                    ->preload(),
                Select::make('programme_id')
                    ->relationship('programme', 'title')
                    ->searchable()
                    ->preload()
                    ->nullable(),
                RichEditor::make('content')
                    ->required()
                    ->columnSpanFull()
                    ->fileAttachmentsCollection('post_attachments'),
                Select::make('status')
                    ->options([
                        'draft' => 'Draft',
                        'published' => 'Published',
                    ])
                    ->default('published')
                    ->required(),
                Toggle::make('is_featured')
                    ->label('Featured Post')
                    ->default(false),
                SpatieMediaLibraryFileUpload::make('cover_image')
                    ->collection('cover_images')
                    ->image()
                    ->imageEditor()
                    ->columnSpanFull(),
                TextInput::make('user_id')
                    ->default(Auth::id())
                    ->hidden()
                    ->dehydrated(),
            ]);
    }
}
