<?php

declare(strict_types=1);

use App\Http\Controllers\Discussion\DiscussionController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'today-show'], function (): void {
    Route::get('/', [DiscussionController::class, 'index'])->name('discussion.index');
    Route::get('/{programme:slug}', [DiscussionController::class, 'programme'])->name('discussion.programme');
    Route::get('/{programme:slug}/{discussion:slug}', [DiscussionController::class, 'show'])->name('discussion.show');
});
