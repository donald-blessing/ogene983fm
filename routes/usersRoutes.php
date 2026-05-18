<?php

declare(strict_types=1);

use App\Http\Controllers\User\PermissionController;
use App\Http\Controllers\User\RoleController;
use App\Http\Controllers\User\UserAboutController;
use App\Http\Controllers\User\UserAvatarController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\User\UserProfileController;
use Illuminate\Support\Facades\Route;

// categories
Route::group(['prefix' => 'dashboard', 'middleware' => ['auth']], function (): void {

    Route::group(['middleware' => ['role:super admin']], function (): void {
        Route::get('members', [UserController::class, 'index'])->name('users.index');
        Route::resource('roles', RoleController::class);
        Route::resource('permissions', PermissionController::class);
    });

    Route::group(['prefix' => 'member'], function (): void {
        Route::group(['prefix' => 'profile'], function (): void {
            Route::get('/{user}-image/edit', [UserAvatarController::class, 'edit'])->name('user.avatar.edit');
            Route::post('/{user}-image/update', [UserAvatarController::class, 'update'])->name('user.avatar.update');
            Route::get('/{user}', [UserProfileController::class, 'getProfile'])->name('user.myProfile');
            Route::delete('/{user}/delete', [UserController::class, 'destroy'])->name('user.delete');
            Route::get('/{user}/verify', [UserController::class, 'verifyUser'])->name('user.verify');

            Route::get('/{user}/about', [UserAboutController::class, 'create'])->name('user.about.create');
            Route::post('/{user}/about', [UserAboutController::class, 'store'])->name('user.about.store');
            Route::get('/{user}/about/edit', [UserAboutController::class, 'edit'])->name('user.about.edit');
            Route::put('/{user}/about/update', [UserAboutController::class, 'update'])->name('user.about.update');
            Route::delete('/{user}/about/delete', [UserAboutController::class, 'destroy'])->name('user.about.delete');
            Route::post('/{user}/{role}', [UserController::class, 'upgradeMembership'])->name('user.upgrade.membership');
        });
    });
});

Route::group(['prefix' => 'member', 'middleware' => ['auth']], function (): void {
    Route::post('/{user}/profile-dialog', [UserProfileController::class, 'profileDialog'])->name('user.profile.dialog');
    Route::get('/{user}/profile', [UserProfileController::class, 'show'])->name('user.profile');
    Route::get('/profile/{user}/change-password', [UserProfileController::class, 'changePassword'])->name('user.profile.changePassword');
    Route::post('/profile/{user}/change-password', [UserProfileController::class, 'updatePassword'])->name('user.profile.updatePassword');
    Route::get('/profile/{user}/{upgrade}', [UserProfileController::class, 'upgrade'])->name('user.profile.upgrade');
});
