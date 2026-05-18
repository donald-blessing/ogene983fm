<?php

declare(strict_types=1);

use App\Http\Controllers\Newsletter\NewsletterController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'dashboard/newsletter', 'middleware' => ['auth', 'role:admin']], function (): void {
    Route::get('/', [NewsletterController::class, 'index'])->name('newsletter.dashboard');
    Route::get('/new', [NewsletterController::class, 'create'])->name('newsletter.create');
    Route::post('/{newsletter}/preview', [NewsletterController::class, 'show'])->name('newsletter.show');
    Route::post('/send', [NewsletterController::class, 'send'])->name('newsletter.send');
    Route::post('/upload', [NewsletterController::class, 'uploadMedia'])->name('newsletter.upload');
    Route::post('/process', [NewsletterController::class, 'process'])->name('newsletter.process');
    Route::post('/draft/save', [NewsletterController::class, 'saveDraft'])->name('newsletter.save.draft');
    Route::post('/draft/{newsletter}/send', [NewsletterController::class, 'sendDraft'])->name('newsletter.send.draft');
    Route::get('/{newsletter}/edit', [NewsletterController::class, 'edit'])->name('newsletter.edit');
    Route::delete('/{newsletter}/delete', [NewsletterController::class, 'destroy'])->name('newsletter.delete');
    Route::post('/{newsletter}/media/delete', [NewsletterController::class, 'destroyMedia'])->name('newsletter.delete.media');
    Route::delete('/subscriber/{newsletterSubscriber}/delete', [NewsletterController::class, 'destroySubscriber'])->name('newsletter.subscriber.delete');
});

Route::group(['prefix' => 'newsletter'], function (): void {
    Route::post('/subscribe', [NewsletterController::class, 'subscribe'])->name('newsletter.subscribe');
    Route::get('/{newsletter}/unsubscribe', [NewsletterController::class, 'unsubscribe'])->name('newsletter.unsubscribe');
});
