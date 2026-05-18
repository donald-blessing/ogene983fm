<?php

declare(strict_types=1);

use App\Http\Controllers\Contact\ContactController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'dashboard', 'middleware' => ['auth', 'role:admin']], function (): void {
    Route::group(['prefix' => 'contacts'], function (): void {
        Route::get('/', [ContactController::class, 'index'])->name('contact.dashboard');
        Route::get('/{contact}', [ContactController::class, 'show'])->name('contact.show');
        Route::post('/{contact}', [ContactController::class, 'get'])->name('contact.get');
        Route::delete('/{contact}/delete', [ContactController::class, 'destroy'])->name('contact.delete');
        Route::post('/send', [ContactController::class, 'send'])->name('contact.send');
        Route::post('/{contact}/reply', [ContactController::class, 'reply'])->name('contact.reply');
    });
});
Route::group(['prefix' => 'contacts'], function (): void {
    Route::post('/store', [ContactController::class, 'store'])->name('contact.store');
});
