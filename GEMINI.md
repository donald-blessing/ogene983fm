<laravel-boost-guidelines>
=== foundation rules ===

# Laravel Boost Guidelines

The Laravel Boost guidelines are specifically curated by Laravel maintainers for this application. These guidelines should be followed closely to ensure the best experience when building Laravel applications.

## Foundational Context

This application is a Laravel application and its main Laravel ecosystems package & versions are below. You are an expert with them all. Ensure you abide by these specific packages & versions.

- php - 8.4
- laravel/framework (LARAVEL) - v12
- laravel/prompts (PROMPTS) - v0
- laravel/socialite (SOCIALITE) - v5
- livewire/livewire (LIVEWIRE) - v4
- laravel/boost (BOOST) - v2
- laravel/mcp (MCP) - v0
- laravel/sail (SAIL) - v1
- phpunit/phpunit (PHPUNIT) - v11
- rector/rector (RECTOR) - v2
- laravel/pint (PINT) - v1

## Skills Activation

This project has domain-specific skills available in `**/skills/**`. You MUST activate the relevant skill whenever you work in that domain—don't wait until you're stuck.

- `laravel-best-practices` — Apply this whenever writing, reviewing, or refactoring Laravel PHP code.
- `livewire-development` — Use for any task or question involving Livewire v4.
- `ui-ux-pro-max` — Use for building accessible, polished, and performant web interfaces.

## Core Development Principles

### 1. Code Analysis & Understanding (MANDATORY)

- **ALWAYS** scan, analyze, and understand existing code patterns, conventions, and standards before making any implementation.
- Study the codebase architecture, naming conventions, and design patterns used.
- Review similar implementations in the codebase to maintain consistency.

### 2. Implementation Standards

- Follow PSR-1, PSR-2, and PSR-12.
- Use descriptive, self-documenting variable and method names (e.g., `isRegisteredForDiscounts`, not `discount()`).
- **Strict Typing**: Always use `declare(strict_types=1);` at the top of every PHP file.
- **Type Hints**: Use explicit return type declarations and type hints for all method parameters.
- Use PHP 8.4 constructor property promotion when all properties can be promoted.
- Use enums and match expressions where appropriate.

### 3. DRY & SOLID Principles

- **SRP**: Each class should have only one reason to change.
- **OCP**: Classes should be open for extension but closed for modification.
- **LSP/ISP/DIP**: Adhere to behavioral contracts, focused interfaces, and depend on abstractions.
- **MANDATORY**: Extract repeated code into reusable methods, classes, or traits.
- **ALWAYS**: Use eager loading to prevent N+1 query problems.

### 4. Security

- **Axios Usage**: To prevent `baseURL` bypass (SSRF/Credential Leakage), ensure that if a `baseURL` is configured, outgoing requests do not use absolute URLs that point elsewhere.
- **Global Protection**: We use a global interceptor in `bootstrap.js` to protect the default Axios instance.
- **Custom Instances**: If using `axios.create()`, you MUST manually apply the security interceptor found in `bootstrap.js`.
- **Sanitization**: Always sanitize user-provided input before using it in URLs or database queries.

## UI/UX Design Principles

A comprehensive guide for building accessible, polished, and performant web interfaces.

### Accessibility (WCAG 2.1)
- **Images**: Every `<img>` must have meaningful `alt` text.
- **Icon buttons**: All icon-only buttons need `aria-label`.
- **Focus states**: Never remove focus outlines without replacement.
- **Keyboard-first**: All flows are fully keyboard-operable.

### Interactions & Layout
- **No dead zones**: If it looks interactive, it should be interactive.
- **Loading states**: Show spinner and keep original label; ensure minimum duration to avoid flicker.
- **Typography**: Consistent hierarchy, proper line height, and use curly quotes (" ") over straight ones.
- **Safe areas**: Account for notches and insets with `env(safe-area-*)`.

=== boost rules ===

# Laravel Boost

## Tools

- Prefer Boost tools (MCP) over manual alternatives.
- Use `database-query` for read-only queries and `database-schema` to inspect tables.
- Use `search-docs` before making code changes to ensure idiomatic Laravel 12 / Livewire v4 patterns.

## Artisan & Tinker

- Pass `--no-interaction` to all Artisan commands.
- Use single quotes for tinker execution to prevent shell expansion.

=== php rules ===

# PHP

- Always declare `declare(strict_types=1);` at the top of every `.php` file.
- Always use curly braces for control structures, even for single-line bodies.
- Use PHP 8.4 constructor property promotion.
- Prefer PHPDoc blocks over inline comments. Only add comments for *why*, not *what*.
- Use array shape type definitions in PHPDoc blocks.

=== laravel/core rules ===

# Do Things the Laravel Way

- Use `php artisan make:` commands for new files.
- **Happy path last**: Handle error conditions first, success case last.
- **Early returns**: Use early returns instead of nested if/else.
- **CRUD focus**: Stick to CRUD methods; extract new controllers for non-CRUD actions.
- Use tuple notation for routes: `[Controller::class, 'method']`.
- Use `config()` helper, avoid `env()` outside config files.

=== laravel/v12 rules ===

# Laravel 12

- This project upgraded to Laravel 12 but maintains the **Laravel 10 directory structure** (e.g., `app/Http/Kernel.php` exists).
- **Middleware**: Registered in `app/Http/Kernel.php`.
- **Exceptions**: Handled in `app/Exceptions/Handler.php`.
- **Database**: Use native `limit(10)` on eager loads. Casts should be set in a `casts()` method.

=== livewire/core rules ===

# Livewire v4

- Keep state server-side. Validate and authorize in actions.
- Use Alpine.js for client-side interactions.
- **Migration note**: Components now live in `App\Livewire`.

=== pint/core rules ===

# Laravel Pint & Rector

- **Pint**: Run `vendor/bin/pint --dirty --format agent` after modifying PHP files.
- **Rector**: Use `vendor/bin/rector process` to maintain modern PHP 8.4 and Laravel 12 standards.
- Always check the `rector.php` config for active rulesets.

=== phpunit/core rules ===

# PHPUnit

- This application uses PHPUnit. All tests must be written as PHPUnit classes.
- **Conversion**: If you see a test using "Pest", convert it to PHPUnit.
- **Coverage**: Tests should cover all happy paths, failure paths, and edge cases.
- **Execution**: Run minimal tests using `--filter` before finalizing.
- Full suite: `php artisan test --compact`.

</laravel-boost-guidelines>
