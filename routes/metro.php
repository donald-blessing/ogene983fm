<?php

declare(strict_types=1);

use App\Http\Controllers\Metro\MetroController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'metro'], function (): void {
    Route::get('/', [MetroController::class, 'index'])->name('metro.index');
    Route::get('/{category:slug}', [MetroController::class, 'category'])->name('metro.category');
    Route::get('/{category:slug}/{metro:slug}', [MetroController::class, 'show'])->name('metro.show');
});
