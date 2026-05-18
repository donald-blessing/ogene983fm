<?php

namespace App\Filament\Resources\Newsletter\NewsletterSubscribers\Pages;

use App\Filament\Resources\Newsletter\NewsletterSubscribers\NewsletterSubscriberResource;
use Filament\Resources\Pages\CreateRecord;

class CreateNewsletterSubscriber extends CreateRecord
{
    protected static string $resource = NewsletterSubscriberResource::class;
}
