<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('general.site_name', 'Ogene 98.3 FM');
        $this->migrator->add('general.site_logo', '');
        $this->migrator->add('general.stream_url', 'https://ogene983fm.radio12345.com/;');
        $this->migrator->add('general.stream_type', 'icecast');
        $this->migrator->add('general.contact_email', 'info@ogene983fm.com');
        $this->migrator->add('general.contact_phone', '');
        $this->migrator->add('general.contact_address', '');
        $this->migrator->add('general.facebook_url', '');
        $this->migrator->add('general.twitter_url', '');
        $this->migrator->add('general.instagram_url', '');
        $this->migrator->add('general.youtube_url', '');
    }
};
