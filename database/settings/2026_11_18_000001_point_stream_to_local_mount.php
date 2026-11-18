<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        // The player and the "Open stream" link use this value directly, so a
        // same-origin path keeps playback working over HTTPS without exposing
        // the Icecast port. Leave any URL an admin has already customised.
        $this->migrator->update('general.stream_url', function (?string $url): string {
            if ($url === null || str_contains($url, 'radio12345.com')) {
                return '/stream';
            }

            return $url;
        });
    }
};
