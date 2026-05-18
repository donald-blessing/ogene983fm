<?php

namespace App\Filament\Resources\Newsletter\NewsletterSubscribers\Pages;

use App\Filament\Resources\Newsletter\NewsletterSubscribers\NewsletterSubscriberResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListNewsletterSubscribers extends ListRecords
{
    protected static string $resource = NewsletterSubscriberResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
