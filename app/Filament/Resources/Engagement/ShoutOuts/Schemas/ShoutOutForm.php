<?php

namespace App\Filament\Resources\Engagement\ShoutOuts\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class ShoutOutForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('user_id')
                    ->relationship('user', 'name'),
                TextInput::make('guest_name'),
                Toggle::make('is_played')
                    ->required(),
                DateTimePicker::make('played_at'),
            ]);
    }
}
