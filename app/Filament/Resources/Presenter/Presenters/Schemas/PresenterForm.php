<?php

declare(strict_types=1);

namespace App\Filament\Resources\Presenter\Presenters\Schemas;

use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Set;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class PresenterForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('General Information')
                    ->columns(2)
                    ->schema([
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
                        RichEditor::make('about')
                            ->columnSpanFull(),
                    ]),

                Section::make('Social Media')
                    ->columns(3)
                    ->schema([
                        TextInput::make('twitter_handle')
                            ->label('Twitter @handle')
                            ->placeholder('@username'),
                        TextInput::make('instagram_handle')
                            ->label('Instagram @handle')
                            ->placeholder('@username'),
                        TextInput::make('facebook_url')
                            ->label('Facebook Profile URL')
                            ->url(),
                    ]),

                Section::make('Images')
                    ->schema([
                        SpatieMediaLibraryFileUpload::make('avatar')
                            ->collection('avatars')
                            ->avatar()
                            ->circularPanel(),
                    ]),
            ]);
    }
}
