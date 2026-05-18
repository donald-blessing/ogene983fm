<?php

declare(strict_types=1);

use App\Http\Controllers\Presenter\PresenterController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'on-air-personalities'], function (): void {
    Route::get('/', [PresenterController::class, 'index'])->name('presenter.index');
    Route::get('/{presenter:slug}', [PresenterController::class, 'show'])->name('presenter.show');
});
