# Laravel 12 Directory Structure Upgrade Plan

## Objective
Upgrade the application's directory structure to the modern Laravel 12 standard (introduced in Laravel 11). This involves removing legacy Kernels, Exception Handlers, and default Service Providers, and centralizing routing, middleware, and exception configuration into `bootstrap/app.php`.

## Background & Motivation
The application dependencies were previously upgraded to Laravel 12, but it retained the older Laravel 10 directory structure. Transitioning to the modern structure significantly reduces boilerplate code, centralizes configuration, and makes future framework upgrades smoother.

## Scope & Impact
*   **Target Files:** `bootstrap/app.php`, `routes/console.php`, `config/app.php`, `bootstrap/providers.php` (if exists).
*   **Files to Delete:** `app/Http/Kernel.php`, `app/Console/Kernel.php`, `app/Exceptions/Handler.php`, `app/Providers/RouteServiceProvider.php`, `app/Providers/EventServiceProvider.php`, `app/Providers/AuthServiceProvider.php`, `app/Providers/BroadcastServiceProvider.php`.
*   **Impact:** This is a structural refactor. No business logic or UI features will change, but how Laravel boots and routes requests will be fundamentally altered.

## Proposed Solution: Clean Slate Upgrade

### 1. Rewrite `bootstrap/app.php`
Replace the legacy Application instantiation with the modern `Application::configure()` builder.

*   **Routing (`withRouting`):**
    *   Register standard `web`, `api`, and `console` routes.
    *   Register broadcasting routes by passing `channels: __DIR__.'/../routes/channels.php'`.
    *   Register the numerous custom route files (e.g., `blog.php`, `metro.php`, `usersRoutes.php`) inside a closure passed to the `then:` argument to ensure they are loaded correctly with the `web` middleware group.

*   **Middleware (`withMiddleware`):**
    *   Migrate global middleware (e.g., `TrustProxies`, `HandleCors`).
    *   Migrate middleware aliases (e.g., `role`, `permission`, `role_or_permission` from Spatie).
    *   Append necessary middleware to the `web` and `api` groups.

*   **Exceptions (`withExceptions`):**
    *   Ensure default Laravel exception handling remains intact. Migrate any custom reporting or rendering logic from the legacy handler if discovered.

### 2. Migrate Scheduling
*   Move the schedule definitions from `app/Console/Kernel.php` directly into `routes/console.php` using the `Illuminate\Support\Facades\Schedule` facade.
    *   `PollIcecastStream` job (every minute).
    *   `backup:clean` (01:00).
    *   `backup:run` (02:00).
    *   `sitemap:generate` (03:00).

### 3. Refactor Service Providers
*   **Delete Providers:** Remove `RouteServiceProvider`, `AuthServiceProvider`, `EventServiceProvider`, and `BroadcastServiceProvider` as their responsibilities are now handled by auto-discovery or `bootstrap/app.php`.
*   **Update Configuration:** Remove references to these deleted providers from `config/app.php` (under the `providers` array) or `bootstrap/providers.php`.

### 4. Cleanup Legacy Files
*   Safely delete `app/Http/Kernel.php`, `app/Console/Kernel.php`, and `app/Exceptions/Handler.php`.

## Verification & Testing
1.  **Static Analysis:** Run `php artisan optimize:clear` and `composer dump-autoload` to ensure no classes are missing or misconfigured.
2.  **Route Verification:** Run `php artisan route:list` to ensure all standard and custom routes are loaded correctly.
3.  **Schedule Verification:** Run `php artisan schedule:list` to confirm the tasks migrated to `routes/console.php` are registered.
4.  **Automated Testing:** Run the full test suite (`php artisan test`) to verify that the application still passes all 44 tests, confirming that middleware, routing, and core logic are unaffected by the structural change.

## Migration & Rollback Strategy
*   **Migration:** The changes will be applied directly to the codebase.
*   **Rollback:** If tests fail critically and cannot be easily resolved, the changes will be reverted using `git restore .` to return the application to its stable state prior to this task.
