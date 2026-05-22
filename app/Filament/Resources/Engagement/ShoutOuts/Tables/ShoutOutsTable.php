<?php

declare(strict_types=1);

namespace App\Filament\Resources\Engagement\ShoutOuts\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ViewColumn;
use Filament\Tables\Table;
use Filament\Tables\Actions\Action;

class ShoutOutsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('user.name')
                    ->label('Listener')
                    ->placeholder(fn ($record) => $record->guest_name ?? 'Anonymous')
                    ->searchable()
                    ->sortable(),
                IconColumn::make('is_played')
                    ->label('Played?')
                    ->boolean()
                    ->sortable(),
                TextColumn::make('played_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('created_at')
                    ->label('Received')
                    ->dateTime()
                    ->sortable(),
                ViewColumn::make('audio')
                    ->label('Recording')
                    ->view('filament.columns.audio-player'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Action::make('markAsPlayed')
                    ->icon('heroicon-o-check-circle')
                    ->color('success')
                    ->action(fn ($record) => $record->update([
                        'is_played' => true,
                        'played_at' => now(),
                    ]))
                    ->hidden(fn ($record) => $record->is_played),
                EditAction::make(),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
