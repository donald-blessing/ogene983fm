# Implementation Plan: Project Modernization & Recommendations

## Objective
To implement the technical and architectural recommendations identified in the `docs/recommendations.md` report, adhering to the stringent engineering standards, SOLID principles, and accessibility guidelines outlined in `GEMINI.md`.

## Key Files & Context
- `app/Models/User.php` (Security & Fixes)
- `app/Http/Kernel.php` & `routes/` (Authorization Middleware)
- `app/Http/Controllers/User/UserProfileController.php` (N+1 queries, Business logic)
- `app/Helpers/Helper.php` (Code bloat reduction)
- `resources/views/` (Accessibility and UX improvements)
- `tests/Feature/` (Test coverage)

## Proposed Solution & Phased Implementation Plan

### Phase 1: Security & Immediate Fixes
1.  **Secure User Model:**
    *   Add `hashed` cast to the `password` field in `casts()` method to ensure automatic hashing.
    *   Implement `spatie/laravel-sluggable` to automatically generate slugs, removing the highly inefficient `whereNull('slug')->get()` logic in the `boot()` method.
    *   Fix the broken ownership logic in `getIsOwnerAttribute` by replacing it with `Auth::id() === $this->id`.
2.  **Centralize Authorization:**
    *   Remove custom `AdminMiddleware` and `SuperAdminMiddleware`.
    *   Update `app/Http/Kernel.php` and route definitions to use `spatie/laravel-permission` native middleware (`role:admin`, etc.).

### Phase 2: Performance & Architecture Refactoring
1.  **Optimize N+1 Queries:**
    *   Refactor `UserProfileController::getProfile` to use `withCount(['orders', 'healthaids', 'pharmafunds', ...])` on the `$user` model instead of iterating and calling `->count()` on each relationship, effectively reducing database queries.
2.  **Extract Service Classes:**
    *   Extract the complex user upgrade logic in `UserProfileController` into a dedicated `UserUpgradeService` to adhere to the Single Responsibility Principle.
3.  **Clean up Helper Bloat:**
    *   Begin migrating generic string methods in `Helper.php` and custom transformers to Laravel's native `Str` and `Stringable` classes.

### Phase 3: Accessibility & UX Improvements
1.  **Alt Text Audit:**
    *   Scan `resources/views` and ensure all `<img>` tags possess meaningful `alt` text to comply with WCAG 2.1 guidelines.
2.  **Form Feedback:**
    *   Implement loading states and feedback for critical form submissions in the user dashboard, utilizing Livewire's `wire:loading` directive and Alpine.js.

### Phase 4: Testing & Quality Assurance
1.  **Implement Automated Tests:**
    *   Write initial PHPUnit feature tests to cover core flows: Authentication (Login/Register), User Profile Updates, and Post Creation.
2.  **Continuous Formatting:**
    *   Run `vendor/bin/pint --dirty --format agent` and `vendor/bin/rector process` to enforce final formatting and PHP 8.4 compliance.

## Verification & Testing
- Run all new and existing tests with `php artisan test --compact`.
- Perform a manual UI review focusing on accessibility features (e.g. inspecting DOM for missing `alt` attributes).
- Use `php artisan route:list` to verify middleware updates haven't broken access.

## Migration & Rollback
- Since these are code-level refactors with minimal database schema alterations, rollback can be achieved safely via standard `git revert`.
