<?php

declare(strict_types=1);

use App\Http\Controllers\Programme\ProgrammeController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'programmes'], function (): void {
    Route::get('/', [ProgrammeController::class, 'index'])->name('programme.index');
    Route::get('/{programme:slug}', [ProgrammeController::class, 'show'])->name('programme.show');
});

Route::get('/onAir', [ProgrammeController::class, 'onAir'])->name('onAir');
