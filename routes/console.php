<?php

use App\Jobs\PollIcecastStream;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schedule;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function (): void {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Schedule::job(new PollIcecastStream)->everyMinute();
Schedule::command('backup:clean')->daily()->at('01:00');
Schedule::command('backup:run')->daily()->at('02:00');
Schedule::command('sitemap:generate')->daily()->at('03:00');
