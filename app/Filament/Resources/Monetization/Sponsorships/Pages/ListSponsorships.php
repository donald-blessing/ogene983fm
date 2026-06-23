<?php

declare(strict_types=1);

namespace App\Filament\Resources\Monetization\Sponsorships\Pages;

use App\Filament\Resources\Monetization\Sponsorships\SponsorshipResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListSponsorships extends ListRecords
{
    protected static string $resource = SponsorshipResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
