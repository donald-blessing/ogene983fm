<?php

declare(strict_types=1);

namespace App\Filament\Resources\Monetization\Sponsorships\Pages;

use App\Filament\Resources\Monetization\Sponsorships\SponsorshipResource;
use Filament\Resources\Pages\CreateRecord;

class CreateSponsorship extends CreateRecord
{
    protected static string $resource = SponsorshipResource::class;
}
