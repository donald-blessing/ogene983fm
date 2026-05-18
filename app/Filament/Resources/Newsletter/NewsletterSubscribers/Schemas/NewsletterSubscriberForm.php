<?php

declare(strict_types=1);

namespace App\Filament\Resources\Newsletter\NewsletterSubscribers\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class NewsletterSubscriberForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required()
                    ->maxLength(255)
                    ->unique(ignoreRecord: true),
                TextInput::make('UUID')
                    ->disabled()
                    ->dehydrated(false)
                    ->placeholder('Auto-generated'),
            ]);
    }
}
