<?php

declare(strict_types=1);

namespace App\Filament\Resources\Presenter\Presenters\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class PresentersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                SpatieMediaLibraryImageColumn::make('avatar')
                    ->collection('avatars')
                    ->circular(),
                TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('twitter_handle')
                    ->label('Twitter')
                    ->searchable(),
                TextColumn::make('instagram_handle')
                    ->label('Instagram')
                    ->searchable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
