<?php

declare(strict_types=1);

use App\Http\Controllers\Gallery\AlbumController;
use App\Http\Controllers\Gallery\AlbumUploadController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'gallery'], function (): void {
    Route::get('/', [AlbumController::class, 'index'])->name('gallery.album.index');
    Route::get('/album/{album:slug}', [AlbumController::class, 'show'])->name('gallery.album.show');
    Route::get('/album/{album:slug}/{albumUpload:slug}', [AlbumUploadController::class, 'show'])->name('gallery.album.upload.show');
});
