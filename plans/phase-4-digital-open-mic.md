# Phase 4: Digital Open Mic Plan

## Objective
Enable listeners to send 15-second voice shout-outs directly to the studio from their browser.

## 1. Implementation
- [x] Create `ShoutOut` model and migration with Spatie MediaLibrary support.
- [x] Implement the `VoiceRecorder` Livewire component using the browser's `MediaRecorder API`.
- [x] Integrated 15-second recording limit and auto-stop functionality.
- [x] Added `ShoutOutResource` to Filament for OAPs to listen and mark recordings as "Played".
- [x] Created a custom `audio-player` column for Filament tables to allow instant listening in the admin panel.

## 2. UI/UX
- [x] Designed a "Hold to Record" circular interface with a dynamic progress ring.
- [x] Implemented instant preview and "Redo" capability for recordings.
- [x] Added support for both authenticated users and guests.

## 3. Verification & Testing
- [x] Verified `ShoutOut` model associations and media collection registration.
- [x] Ensured guest validation works correctly (name required for guests).
- [x] Verified all existing tests pass after integration.
