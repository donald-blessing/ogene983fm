# Phase 5: On-Demand Archive (Podcasts) Plan

## Objective
Transform radio show archives into a structured, on-demand podcasting system.

## 1. Implementation
- [x] Create `Episode` model and migration with `programme_id` relationship.
- [x] Integrate Spatie MediaLibrary for high-quality audio storage.
- [x] Implement `EpisodeResource` in Filament for show management.
- [x] Updated `ProgrammeController@show` to eagerly load archived episodes.

## 2. UI/UX
- [x] Designed a dedicated `programmes.show` view with the "Liquid Glass" theme.
- [x] Integrated an inline audio player for every archived episode.
- [x] Added "Hosted By" cards for OAPs with avatar integration.

## 3. Verification & Testing
- [x] Verified many-to-one relationship between `Episodes` and `Programmes`.
- [x] Confirmed that `published_at` correctly handles date casting for the frontend.
- [x] Ensured all existing tests pass after integration.
