<?php

declare(strict_types=1);

namespace App\Filament\Resources\Monetization\Sponsorships;

use App\Filament\Resources\Monetization\Sponsorships\Pages\CreateSponsorship;
use App\Filament\Resources\Monetization\Sponsorships\Pages\EditSponsorship;
use App\Filament\Resources\Monetization\Sponsorships\Pages\ListSponsorships;
use App\Filament\Resources\Monetization\Sponsorships\Schemas\SponsorshipForm;
use App\Filament\Resources\Monetization\Sponsorships\Tables\SponsorshipsTable;
use App\Models\Monetization\Sponsorship;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class SponsorshipResource extends Resource
{
    protected static ?string $model = Sponsorship::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return SponsorshipForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SponsorshipsTable::configure($table);
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
            'index' => ListSponsorships::route('/'),
            'create' => CreateSponsorship::route('/create'),
            'edit' => EditSponsorship::route('/{record}/edit'),
        ];
    }
}
