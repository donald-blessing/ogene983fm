# Phase 1: Performance Optimization Plan

## Objective
Identify and resolve performance bottlenecks in the public-facing frontend, specifically focusing on N+1 query issues and inefficient data loading patterns.

## 1. Audit & Analysis
- [x] Audit `AppServiceProvider` view composers for lazy-loading.
- [x] Audit `index.blade.php` for relationship access within loops.
- [x] Audit `HomeController` for suboptimal Eloquent queries.

## 2. Implementation Steps

### A. AppServiceProvider Refactoring
- [x] Separate the `categories` composer into a lightweight version for the navbar (just `name`, `slug`) and a comprehensive version for `site.pages.index`.
- [x] Eager load `subcategories`, `media`, and `posts` (with their own relationships like `category` and `comments`) for the Home Page.
- [x] Add `Model::preventLazyLoading(! app()->isProduction())` in `boot()` to ensure no new N+1 issues are introduced during future development.

### B. HomeController Optimization
- [x] Refactor `index()` method.
- [x] Offload home page data fetching to view composers in `AppServiceProvider`.
- [x] Ensure `Post` query includes `withCount('comments')`.
- [x] Eager load `media` for `SongOfTheWeek` and `Album`.

### C. Blade Template Refactoring
- [x] Improve data handling in `site/pages/index.blade.php`.
- [x] Replace `$post->comments->count()` with `$post->comments_count` (from `withCount`).
- [x] Verify that all attributes accessed (like `coverImage`, `about`) are backed by eager-loaded relationships (`media`, `description`).

### D. Bug Fixes (Identified during Optimization)
- [x] Added `Commentable` trait to `Post` and `Metro` models to support `@comments` directive.
- [x] Fixed `TypeError` in `Post@getSearchResult` (passed `id` instead of `title`).
- [x] Fixed typo in `SearchController` (`$searchResult` -> `$result`).
- [x] Updated `AlbumController` and `UserController` to eager load relationships required by the frontend views.

## 3. Verification & Validation
- [x] Run the full test suite (`php artisan test`) to ensure logic remains correct.
- [x] Monitor query logs in a development environment to confirm the reduction in SQL queries.
- [x] Verify that lazy loading is successfully blocked in the local environment.

## 4. Rollback Plan
- Changes are strictly limited to query optimizations and view logic; rollback can be performed by reverting `AppServiceProvider.php`, `HomeController.php`, and the modified Blade views.
