<?php

declare(strict_types=1);

namespace App\Filament\Pages;

use App\Settings\GeneralSettings;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Pages\SettingsPage;
use Filament\Schemas\Schema;
use Illuminate\Contracts\Support\Htmlable;

class ManageGeneralSettings extends SettingsPage
{
    protected static \BackedEnum|string|null $navigationIcon = 'heroicon-o-cog-6-tooth';

    protected static string $settings = GeneralSettings::class;

    protected static \UnitEnum|string|null $navigationGroup = 'Settings';

    public function form(Schema $schema): Schema
    {
        return $schema
            ->schema([
                Section::make('Site Configuration')
                    ->columns(2)
                    ->schema([
                        TextInput::make('site_name')
                            ->required(),
                        TextInput::make('site_motto')
                            ->required(),
                        TextInput::make('site_logo')
                            ->placeholder('URL to logo'),
                        TextInput::make('contact_email')
                            ->email()
                            ->required(),
                        TextInput::make('contact_phone'),
                        TextInput::make('contact_address')
                            ->columnSpanFull(),
                    ]),

                Section::make('Stream Configuration')
                    ->columns(2)
                    ->schema([
                        TextInput::make('stream_url')
                            ->url()
                            ->required(),
                        TextInput::make('stream_type')
                            ->required()
                            ->placeholder('e.g. icecast, shoutcast'),
                    ]),

                Section::make('Social Links')
                    ->columns(2)
                    ->schema([
                        TextInput::make('facebook_url')
                            ->url(),
                        TextInput::make('twitter_url')
                            ->url(),
                        TextInput::make('instagram_url')
                            ->url(),
                        TextInput::make('youtube_url')
                            ->url(),
                    ]),
            ]);
    }

    public function getTitle(): string|Htmlable
    {
        return 'General Settings';
    }
}
