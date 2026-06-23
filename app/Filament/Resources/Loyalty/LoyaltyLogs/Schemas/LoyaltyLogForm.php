<?php

declare(strict_types=1);

namespace App\Filament\Resources\Loyalty\LoyaltyLogs\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class LoyaltyLogForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('user_id')
                    ->relationship('user', 'name')
                    ->required(),
                TextInput::make('points')
                    ->required()
                    ->numeric(),
                TextInput::make('reason')
                    ->required(),
                TextInput::make('action_type')
                    ->required(),
            ]);
    }
}
