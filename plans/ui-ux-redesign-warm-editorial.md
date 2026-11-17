# UI/UX Redesign Plan — "Warm Editorial Radio"

> Companion to `docs/ui-ux-audit-and-recommendations.md`.
> **Status:** Not started · **Created:** 2026-11-16
> **Supersedes the visual direction in** `plans/phase-2-visual-modernization.md` and `plans/ui-ux-upgrade-strategy.md` (neon + glass). Those remain as historical record.
> **Stack:** Laravel 13 · Livewire 4 · Tailwind CSS v4 · Filament 5 · Alpine.js

---

## Objective

Replace the early-2020s neon/glass treatment with a coherent, brand-led, editorial system:

- One accent colour derived from the actual logo, not a cyber palette.
- Real content hierarchy (live status, schedule, presenters, editorial) instead of decorative panels.
- A slim, accessible persistent player.
- Branded Filament admin.
- Measurable targets: WCAG AA contrast, LCP < 2.5s, CLS < 0.1, INP < 200ms.

**Non-goals:** new JS framework, new CSS framework, more gradients/blur, page-builder components.

---

## Branch Strategy (do this first)

Implementation starts on a dedicated branch. No work lands directly on `master` or `develop`.

```bash
git checkout develop          # or master if develop is behind
git pull
git checkout -b feature/ui-ux-warm-editorial
```

- One long-lived integration branch for this plan, plus optional per-phase branches off it:
  - `feature/ui-ux-warm-editorial` (integration)
  - `feature/ui-player-resilience` (Phase 1 + 1.5)
  - `feature/ui-home-redesign` (Phase 2)
  - `feature/ui-core-pages` (Phase 3)
  - `feature/ui-admin-branding` (Phase 4)
- Each phase merges into the integration branch via PR; only the integration branch merges to `develop`.
- Commits: Conventional Commits (`feat:`, `fix:`, `refactor:`, `chore:`).
- Do not mix the agent-config/`.gitignore` cleanup in this branch — separate commit set if not already landed.
- Rollback unit = phase branch, so a bad phase can be dropped without reverting the whole redesign.

---

## Phase 0 — Foundations

**Goal:** one token system, one layout, one nav/footer, self-hosted fonts.

- [ ] Rewrite `resources/css/app.css` `@theme` block with new tokens:
  - `--color-ink #121110`, `--color-surface #1B1917`, `--color-line #2E2A26`
  - `--color-cream #F5E9D7`, `--color-muted #A8A29A`
  - `--color-brand #D8482C`, `--color-brand-text #F06A4D`, `--color-gold #E8B44A`
  - Radius scale `--radius-xs/sm/md/lg`: 4/8/12/16px
  - Spacing scale + container width
- [ ] Type: display **Fraunces** (or Instrument Serif) + body **Inter** (or Geist). Self-host in `public/fonts`, remove Google Fonts `@import`, add `<link rel="preload">` for display weight.
- [ ] Collapse `resources/views/layouts/pages/*.blade.php` (7 near-identical files) into one layout + named sections; keep route-facing view names stable.
- [ ] Extract nav + footer into components with accessible dropdown behaviour (`aria-expanded`, `aria-controls`, Escape to close, focus trap not needed for non-modal).
- [ ] Delete duplicate glass utilities; keep `glass-panel` for nav/drawer only, blur 12–16px, solid surface behind text.
- [ ] Remove infinite decorative `animate-pulse` blobs; single static background treatment.

**Acceptance:** no page renders with legacy purple/green tokens; one layout file; fonts self-hosted; Lighthouse perf not regressed.

---

## Phase 1 — Persistent Player

**Goal:** non-intrusive dock, correct live-audio semantics, a11y.

Files: `app/Livewire/PersistentPlayer.php`, `resources/views/livewire/persistent-player.blade.php`, `resources/css/app.css`.

- [ ] Height 72px desktop / 56px mobile; `fixed bottom-0` with `env(safe-area-inset-bottom)`.
- [ ] Reserve space via CSS var: `body { padding-bottom: var(--player-h) }` — no magic `120px`.
- [ ] Layout: cover · show/track · **LIVE** pill · play/stop · volume · expand-to-sheet (mobile).
- [ ] Copy: "Listen Live" / "Stop" (not Pause); "Connecting…" / "Buffering…" / "Live" states.
- [ ] Error state: "Stream offline — check back at HH:MM" + retry button.
- [ ] Live metadata: `aria-live="polite"` region; `aria-pressed` on toggle; `aria-label` on icon buttons.
- [ ] Keyboard: Space toggles, `M` mutes, arrows adjust volume when focused; visible focus ring.
- [ ] Visualizer: CSS bars only while playing; respect `prefers-reduced-motion`.
- [ ] Mobile: collapse to compact bar; tap opens bottom sheet with full controls.

**Acceptance:** player never overlaps content at 320/390/768/1440; screen reader announces state + track changes; no layout shift on load.

---

## Phase 1.5 — Playback Architecture & Resilience

**Goal:** audio that never dies, metadata that is actually live, and public stream endpoints. This is the half of "modern radio site" that visual work cannot fix — do it alongside Phase 1.

### Status against the four patterns

| Pattern | Current state | Gap |
|---|---|---|
| Persistent playback | `@persist('player')` + `wire:navigate` already present | ~145 public links lack `wire:navigate` → full reload kills audio. No Inertia/Next needed; Livewire is the SPA equivalent here. |
| Stream auto-recovery | `error` flag only; button disables | No retry/backoff, no `stalled`/`ended`/watchdog, no offline handling |
| Dynamic metadata | Icecast poll → `NowPlayingUpdated` → Echo → Livewire | `BROADCAST_DRIVER=log`, `QUEUE_CONNECTION=sync`, poll `everyMinute()`, no hydrate on mount, no history |
| Direct stream links | none | No `.m3u`/`.pls`, no copy-URL, no public status endpoint |

**Corrections to the supplied pattern list:**
- The site does **not** need to become an Inertia/Next/Nuxt SPA. `wire:navigate` + `@persist` keeps the audio node outside the swapped DOM. Requirement is consistency, not a framework.
- **Do not adopt HLS for the primary stream.** HLS adds 6–30 s latency, which breaks phone-in talk radio. Keep Icecast as primary; HLS only as an optional adaptive-bitrate variant later.

### 1.5.A — Delivery fixes (P0, minutes each)

- [ ] `.env` / `.env.example`: `BROADCAST_DRIVER=reverb` (currently `log` → real-time chain is dead), `QUEUE_CONNECTION` = redis/database (not `sync`).
- [ ] Document/start `php artisan reverb:start` in local + production runbook (Herd process or supervisor).
- [ ] Apply `wire:navigate` to every internal public link: `site/pages/blog`, `about`, `contact`, `login`, `register`, programme/presenter/news cards, gallery, live-chat.
- [ ] Audit: zero internal `<a href>` on public pages without `wire:navigate` (target: nav 22/22, footer 9/9, content 0 missing).
- [ ] `PersistentPlayer::mount()` hydrates `currentSong` from `Cache::get('icecast_last_song')`, so the bar is never blank before the first broadcast.

### 1.5.B — Stream resilience (P0)

- [ ] Exponential backoff with jitter (1 s → 15 s cap), cache-busting `?t=` on retry, `play().catch()` re-arm.
- [ ] Listen for `stalled`, `ended`, `error`, `waiting`; watchdog: `currentTime` not advancing for ~10 s → resume.
- [ ] `navigator.onLine` / `online` / `offline` handling; resume on `visibilitychange` (iOS Safari suspends background tabs).
- [ ] Cap retries, then show explicit "Stream offline — retry at HH:MM" + manual retry.
- [ ] Optional backup mount: `stream_url_backup`; fail over silently on repeated failure and label "backup stream".
- [ ] `preload="none"`; create the `Audio` object lazily on first play (no stream bandwidth on page load).

### 1.5.C — Metadata latency (P1)

- [ ] Reduce poll to 5–10 s **or** accept automation webhook (AzuraCast/RadioDJ) → broadcast on receipt. Target: track change appears < 10 s.
- [ ] Broadcast `ShouldBroadcastNow` for now-playing (or ensure a real queue worker).
- [ ] Cache last 10 tracks → "Recently played" on home page and player sheet.
- [ ] Dedupe identical titles; trim/normalise `artist - title` consistently with `IcecastService::cleanSongTitle`.

### 1.5.D — Listener surfaces (P1)

- [ ] **Media Session API**: `navigator.mediaSession.metadata` (title, artist, artwork) + play/pause/stop handlers. Without this, playback dies when the phone locks — the single highest-value radio feature missing.
- [ ] Deep link "share this track" from now-playing.
- [ ] `/listen.m3u` and `/listen.pls` download routes (correct `audio/x-mpegurl` / `audio/x-scpls` MIME), plus `/listen` page with copy-stream-URL and "open in VLC".
- [ ] Thin JSON status endpoint (listeners, bitrate, current song) proxying `IcecastService`; referenced from `/listen`.
- [ ] Low-bandwidth mount for `prefers-reduced-data` / `navigator.connection.saveData` (e.g. 64 kbps).

### 1.5.E — Ops (P2)

- [ ] Chart the `listeners` value you already poll (currently discarded) in the Filament dashboard.
- [ ] Alert when the Icecast source is down or metadata is stale > 5 min.
- [ ] Show "X listening now" on the public site.

**Acceptance:** audio survives every internal navigation, survives a 30 s stream drop, shows live metadata < 10 s after track change, works with the phone locked (Media Session), and exposes usable `.m3u`/`.pls` endpoints.

---

## Phase 2 — Home

Files: `resources/views/site/pages/index.blade.php`, `HomeController`, view composers.

- [ ] Hero: live status + current show + primary "Listen Live" + secondary "Our Story". Remove "Now Trending" badge and music-note watermark.
- [ ] Live strip: On Air now / Next up / Recently played (real data, graceful fallbacks).
- [ ] Today's schedule preview: horizontal scroll timeline, "now" marker, day chips on mobile.
- [ ] Presenters row: portrait cards → presenter page.
- [ ] Editorial grid: 1 lead + 3 compact stories; consistent aspect ratios; no masonry.
- [ ] Song of the Week: card with fallback copy ("This week's pick drops Friday") + CTA.
- [ ] Empty states for every module: icon + one line + action. No blank panels.
- [ ] Members-only loyalty card stays but only renders with real points; otherwise soft prompt.

**Acceptance:** page is presentable with an empty database; no clipped text at 390px; all sections have a designed zero-state.

---

## Phase 3 — Core Pages

- [ ] **Programmes** (`site.pages.programme*`): weekly grid — 7 columns desktop, day tabs mobile, current slot highlighted, presenter avatar, time range, filter by day. Never render an empty page.
- [ ] **Presenters** (`presenter.index/show`): 4:5 portraits, show schedule, recent episodes, socials.
- [ ] **News** (`site.pages.blog`): `2fr 1fr` grid, featured post, pagination, sidebar widgets with fallbacks (Search / Categories / Hot now / Tags currently render empty).
- [ ] **Gallery** (`album.index/show`): consistent grid, lightbox keyboard support.
- [ ] **Metro**: align cards + typography with the new system.
- [ ] **About / Contact**: editorial single column, form states (idle/validating/error/success), no heavy map iframe above the fold.
- [ ] Cards: unify radius/elevation/hover; hover = border + 2px lift, not neon glow.

**Acceptance:** every public route has real content structure + empty states; no orphaned sidebar; cards share one component.

---

## Phase 4 — Filament Admin

Files: `app/Providers/Filament/AdminPanelProvider.php`, new `resources/css/filament/admin/theme.css`.

- [ ] `->brandName('Ogene 98.3 FM')`, `->brandLogo()`, favicon.
- [ ] `->colors(['primary' => Color::hex('#D8482C')])` with a generated 50–950 scale; gray palette matching `--color-ink`.
- [ ] `php artisan make:filament-theme admin`; import token layer; self-host Inter; match radii.
- [ ] Custom login: station image, "Studio login", brand mark.
- [ ] Dashboard widgets: On Air now, today's schedule, latest posts, subscriber count, quick actions.
- [ ] Dark mode default; verify contrast in both modes.

**Acceptance:** no "Laravel" branding anywhere; admin visually consistent with public site.

---

## Phase 5 — Polish & Verification

- [ ] Motion pass: 150–250ms `ease-out`, transform/opacity only; reduced-motion honoured everywhere.
- [ ] A11y audit: axe/Lighthouse, keyboard-only walkthrough of nav, player, forms, gallery.
- [ ] Fix all text below 4.5:1 (`white/40`, `white/20`, `#BF00FF` text).
- [ ] Images: explicit `width`/`height`, `loading="lazy"` below fold, `content-visibility: auto` on long sections.
- [ ] Replace full Font Awesome font with subset or inline SVGs (~20 icons).
- [ ] SEO/OG: per-page titles, descriptions, OG images (seotools already installed).
- [ ] Visual regression: capture Playwright screenshots per route at 390/768/1440 before/after.
- [ ] Performance budget check: LCP < 2.5s, CLS < 0.1, INP < 200ms (throttled 4G).

**Acceptance:** no critical axe violations; budgets met; before/after screenshot set stored for review.

---

## Sequencing & Effort

| Phase | Depends on | Branch | Effort | Impact |
|---|---|---|---|---|
| 0 Foundations | — | `feature/ui-ux-warm-editorial` | 1 day | Unblocks all |
| 1 Player | 0 | `feature/ui-player-resilience` | 1–2 days | Highest perceived quality |
| 1.5 Playback architecture | 1 | `feature/ui-player-resilience` | 1–2 days | Radio that actually behaves like radio |
| 2 Home | 0, 1 | `feature/ui-home-redesign` | 2–3 days | First impression |
| 3 Core pages | 0 | `feature/ui-core-pages` | 2–3 days | Depth/credibility |
| 4 Admin | 0 | `feature/ui-admin-branding` | 1 day | Staff experience |
| 5 Polish | 1–4 | integration branch | 1–2 days | Quality/trust |

**Recommended cut:** Phases 0 + 1 + 1.5 first. They fix the things listeners actually notice (audio stopping, dead metadata, phone-lock playback) and make the visual work evaluate against a working product.

---

## Rollback

Rollback unit = phase branch. Drop the branch, no cross-phase revert.

- Whole plan: close/delete `feature/ui-ux-warm-editorial`; `develop`/`master` untouched.
- Single phase: revert its merge commit on the integration branch.
- File-level revert points:

- `resources/css/app.css`
- `resources/views/layouts/**`
- `resources/views/livewire/persistent-player.blade.php`
- `resources/views/site/pages/*`
- `app/Providers/Filament/AdminPanelProvider.php`
- `.env` broadcast/queue settings (Phase 1.5.A)

No migrations, no dependency changes, no data model changes.

---

## Open Decisions (needs sign-off before branch creation + Phase 0)

1. **Palette:** adopt logo-derived warm palette (recommended) vs. keep purple/green and fix only execution. Changing palette rewrites brand feel site-wide.
2. **Type pairing:** Fraunces + Inter (recommended) vs. Instrument Serif + Geist — both free; Fraunces has more weight range.
3. **Data:** seed demo content (posts, programmes, presenters, song of the week) so phases can be evaluated visually, or design purely against empty state?
4. **Branch base:** branch from `develop` (recommended) or `master`? Note the working tree currently has uncommitted changes on `master`.
5. **Broadcast transport:** confirm Reverb is the production target for Phase 1.5.A, or whether Pusher/hosted broadcasting is intended.

---

**Prepared by:** UI/UX review
**Status:** Awaiting approval to create `feature/ui-ux-warm-editorial` and begin Phase 0
