<?php

declare(strict_types=1);

use App\Http\Controllers\Post\PostController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'news-and-event'], function (): void {
    Route::get('/', [PostController::class, 'index'])->name('post.index');
    Route::get('/{category:slug}', [PostController::class, 'category'])->name('post.category');
    Route::get('/{category:slug}/{post:slug}', [PostController::class, 'show'])->name('post.show');
});
