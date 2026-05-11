# Upgrading to Laravel 10

## Objective
Upgrade the application framework from Laravel 8 to Laravel 10, resolving all dependency conflicts and updating necessary codebase components to maintain compatibility with PHP 8.4 and Laravel 10 conventions.

## Key Files & Context
- `composer.json` (Dependency definitions)
- `app/Http/Kernel.php` (Global middleware stack)
- `app/Http/Middleware/TrustProxies.php` (Proxy configuration)

## Implementation Steps

### 1. Update Dependencies (`composer.json`)
- **Framework & Core:**
  - `laravel/framework`: Update to `^10.0`
  - `laravel/ui`: Update to `^4.0`
  - `laravel/tinker`: Update to `^2.8`
  - `doctrine/dbal`: Update to `^3.0`
  - `php`: Require `^8.1` (System is on 8.4)
- **Remove Obsolete Packages:**
  - `fideloper/proxy` (Native in Laravel 9+)
  - `fruitcake/laravel-cors` (Native in Laravel 9+)
  - `facade/ignition` (Replaced by Spatie)
- **Add/Update Packages:**
  - `spatie/laravel-ignition`: `^2.0`
  - `spatie/laravel-medialibrary`: `^10.0`
  - `spatie/laravel-permission`: `^6.0`
  - `cyrildewit/eloquent-viewable`: `^7.0`
  - `spatie/laravel-honeypot`: `^4.0`
  - `spatie/laravel-sitemap`: `^7.0`
  - `spatie/laravel-sluggable`: `^3.0`
  - `spatie/pdf-to-image`: `^3.0`
- **Development Tools:**
  - `nunomaduro/collision`: Update to `^7.0`
  - `phpunit/phpunit`: Update to `^10.0`
  - `mockery/mockery`: Update to `^1.6`
  - `barryvdh/laravel-ide-helper`: Update to `^2.15`

### 2. Codebase Migrations
- **TrustProxies Middleware (`app/Http/Middleware/TrustProxies.php`):**
  - Change the extended class from `Fideloper\Proxy\TrustProxies` to `Illuminate\Http\Middleware\TrustProxies`.
- **HTTP Kernel (`app/Http/Kernel.php`):**
  - Replace any references to `Fruitcake\Cors\HandleCors` (if present) with `Illuminate\Http\Middleware\HandleCors`.

### 3. Execution
- Run `composer update --ignore-platform-reqs` to apply the changes and generate a new `composer.lock`.
- Run `php artisan optimize:clear` to clear caches.

## Verification & Testing
- Verify that the application boots successfully (`php artisan --version` should output Laravel 10.x).
- Ensure no dependency resolution errors occur during the composer update.
- Verify that routing and basic HTTP requests function without CORS or Proxy middleware errors.
