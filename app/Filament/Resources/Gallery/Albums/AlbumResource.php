<?php

declare(strict_types=1);

namespace App\Filament\Resources\Gallery\Albums;

use App\Filament\Resources\Gallery\Albums\Pages\CreateAlbum;
use App\Filament\Resources\Gallery\Albums\Pages\EditAlbum;
use App\Filament\Resources\Gallery\Albums\Pages\ListAlbums;
use App\Filament\Resources\Gallery\Albums\Schemas\AlbumForm;
use App\Filament\Resources\Gallery\Albums\Tables\AlbumsTable;
use App\Models\Gallery\Album;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class AlbumResource extends Resource
{
    protected static ?string $model = Album::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return AlbumForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AlbumsTable::configure($table);
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
            'index' => ListAlbums::route('/'),
            'create' => CreateAlbum::route('/create'),
            'edit' => EditAlbum::route('/{record}/edit'),
        ];
    }
}
