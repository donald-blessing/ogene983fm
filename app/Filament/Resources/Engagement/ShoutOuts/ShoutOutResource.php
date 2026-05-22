<?php

namespace App\Filament\Resources\Engagement\ShoutOuts;

use App\Filament\Resources\Engagement\ShoutOuts\Pages\CreateShoutOut;
use App\Filament\Resources\Engagement\ShoutOuts\Pages\EditShoutOut;
use App\Filament\Resources\Engagement\ShoutOuts\Pages\ListShoutOuts;
use App\Filament\Resources\Engagement\ShoutOuts\Schemas\ShoutOutForm;
use App\Filament\Resources\Engagement\ShoutOuts\Tables\ShoutOutsTable;
use App\Models\Engagement\ShoutOut;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ShoutOutResource extends Resource
{
    protected static ?string $model = ShoutOut::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return ShoutOutForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ShoutOutsTable::configure($table);
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
            'index' => ListShoutOuts::route('/'),
            'create' => CreateShoutOut::route('/create'),
            'edit' => EditShoutOut::route('/{record}/edit'),
        ];
    }
}
