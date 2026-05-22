# Phase 3: Real-time Interactive Hub Plan

## Objective
Enable real-time communication between the radio station and its listeners to provide instant updates and interactive features.

## 1. Infrastructure
- [x] Install **Laravel Reverb** as the primary WebSocket server.
- [x] Configure `broadcasting.php` with the `reverb` driver.
- [x] Update `bootstrap.js` to initialize **Laravel Echo** with Reverb settings.
- [x] Define the `radio-station` public channel in `routes/channels.php`.

## 2. Real-time Features

### A. Instant "Now Playing" Updates
- [x] Create the `NowPlaying` broadcast event.
- [x] Update the `PersistentPlayer` Livewire component to listen for `programme.updated` events.
- [x] Add an Eloquent observer/hook to the `Programme` model to broadcast updates when the title changes.

### B. Live Listener Chat
- [x] Create the `public_chat_messages` table and `PublicChatMessage` model.
- [x] Implement the `LiveChat` Livewire component with real-time message broadcasting and reception.
- [x] Integrate the `LiveChat` component into the "Today's Show" (Discussion) details page.
- [x] Implement auto-scrolling and glassmorphic UI for the chat interface.

## 3. Verification & Testing
- [x] Verify that `npm run build` bundles Echo and Reverb client logic.
- [x] Run full feature test suite to ensure no regressions in existing flows.
- [x] Manually verify event dispatching via `broadcast()` helper (if environment allows).

## 4. Rollback Plan
- Revert `package.json`, `bootstrap.js`, `broadcasting.php`, and delete the new Event and Livewire classes.
