<?php

declare(strict_types=1);

use App\Http\Middleware\CachePublicResponse;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Middleware\PermissionMiddleware;
use Spatie\Permission\Middleware\RoleMiddleware;
use Spatie\Permission\Middleware\RoleOrPermissionMiddleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        channels: __DIR__.'/../routes/channels.php',
        health: '/up',
        then: function () {
            Route::middleware('web')
                ->group(base_path('routes/blog.php'));

            Route::middleware('web')
                ->group(base_path('routes/contacts.php'));

            Route::middleware('web')
                ->group(base_path('routes/discussion.php'));

            Route::middleware('web')
                ->group(base_path('routes/gallery.php'));

            Route::middleware('web')
                ->group(base_path('routes/metro.php'));

            Route::middleware('web')
                ->group(base_path('routes/newsletterRoutes.php'));

            Route::middleware('web')
                ->group(base_path('routes/on-air-personalities.php'));

            Route::middleware('web')
                ->group(base_path('routes/programmes.php'));

            Route::middleware('web')
                ->group(base_path('routes/song-of-the-week.php'));

            Route::middleware('web')
                ->group(base_path('routes/usersRoutes.php'));
        },
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->web(append: [
            CachePublicResponse::class,
        ]);

        $middleware->alias([
            'role' => RoleMiddleware::class,
            'permission' => PermissionMiddleware::class,
            'role_or_permission' => RoleOrPermissionMiddleware::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
