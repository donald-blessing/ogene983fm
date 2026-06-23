<?php

declare(strict_types=1);

namespace App\Filament\Resources\Presenter\Presenters;

use App\Filament\Resources\Presenter\Presenters\Pages\CreatePresenter;
use App\Filament\Resources\Presenter\Presenters\Pages\EditPresenter;
use App\Filament\Resources\Presenter\Presenters\Pages\ListPresenters;
use App\Filament\Resources\Presenter\Presenters\Schemas\PresenterForm;
use App\Filament\Resources\Presenter\Presenters\Tables\PresentersTable;
use App\Models\Presenter\Presenter;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PresenterResource extends Resource
{
    protected static ?string $model = Presenter::class;

    protected static \BackedEnum|string|null $navigationIcon = Heroicon::OutlinedUserGroup;

    protected static \UnitEnum|string|null $navigationGroup = 'People';

    public static function form(Schema $schema): Schema
    {
        return PresenterForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PresentersTable::configure($table);
    }

    public static function getPages(): array
    {
        return [
            'index' => ListPresenters::route('/'),
            'create' => CreatePresenter::route('/create'),
            'edit' => EditPresenter::route('/{record}/edit'),
        ];
    }
}
