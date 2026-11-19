<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->update(
            'general.contact_address',
            fn () => 'No 2 NTA Road, Old Onitsha Enugu Road, Enugwu Ukwu, Anambra State, Nigeria'
        );
    }
};
