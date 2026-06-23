<?php

declare(strict_types=1);

namespace App\Filament\Resources\Loyalty\LoyaltyLogs;

use App\Filament\Resources\Loyalty\LoyaltyLogs\Pages\CreateLoyaltyLog;
use App\Filament\Resources\Loyalty\LoyaltyLogs\Pages\EditLoyaltyLog;
use App\Filament\Resources\Loyalty\LoyaltyLogs\Pages\ListLoyaltyLogs;
use App\Filament\Resources\Loyalty\LoyaltyLogs\Schemas\LoyaltyLogForm;
use App\Filament\Resources\Loyalty\LoyaltyLogs\Tables\LoyaltyLogsTable;
use App\Models\Loyalty\LoyaltyLog;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class LoyaltyLogResource extends Resource
{
    protected static ?string $model = LoyaltyLog::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return LoyaltyLogForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return LoyaltyLogsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListLoyaltyLogs::route('/'),
            'create' => CreateLoyaltyLog::route('/create'),
            'edit' => EditLoyaltyLog::route('/{record}/edit'),
        ];
    }
}
