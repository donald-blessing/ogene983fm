<?php

declare(strict_types=1);

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class GeneralSettings extends Settings
{
    public string $site_name;

    public string $site_motto;

    public string $site_logo;

    public string $stream_url;

    public string $stream_type;

    public string $contact_email;

    public string $contact_phone;

    public string $contact_address;

    public ?string $facebook_url;

    public ?string $twitter_url;

    public ?string $instagram_url;

    public ?string $youtube_url;

    public static function group(): string
    {
        return 'general';
    }
}
