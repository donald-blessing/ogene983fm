# UI/UX Audit & Redesign Recommendations — Ogene 98.3 FM

> Generated: 2026-11-16
> Scope: public site (`/`, `/programmes`, `/news-and-event`), persistent player, Filament admin login
> Method: live screenshots at 1440px + 390px, code review of `resources/views`, `resources/css/app.css`, layouts; contrast math; web research on modern radio/audio UI
> Evidence assets: `.playwright-mcp/ui-home-desktop.png`, `ui-home-mobile.png`, `ui-programmes.png`, `ui-news.png`, `ui-admin-login.png`

**Nuance first:** the database was empty at audit time (0 posts, categories, programmes, presenters, albums, users). Some blank space is missing seed data, not design. What follows separates data-absence from real design/UX defects.

---

## 1. Diagnosis

| # | Issue | Evidence | Severity |
|---|---|---|---|
| 1 | **Brand conflict.** Logo is warm red/cream/gold; UI is cyber-purple + acid green. Two identities fighting. | logo vs `--color-primary: #BF00FF`, `--color-secondary: #39FF14` | High |
| 2 | **Mobile hero clips.** "Authentically" overflows the viewport at 390px (`text-5xl` + `<br>` + padding). | mobile screenshot | High |
| 3 | **Player overlaps content.** Fixed bar covers hero/cards; `pb-[120px]` on body is less than the bar's real height at some breakpoints. | `persistent-player.blade.php:1`, layout `:28` | High |
| 4 | **No empty states.** Empty modules render as void panels ("Selecting this week's favorite…", blank cards, empty sidebar boxes). | `index.blade.php:142`, news page | High |
| 5 | **Glass overuse.** 60 glass surfaces (`glass-panel` 34 + `liquid-glass` 26) plus `blur-[130px]`–`blur-[150px]` decorative blobs. Muddy hierarchy, expensive paint, low contrast. | grep counts | Medium |
| 6 | **Contrast failures.** `white/40` = **3.77:1**, `white/20` = **1.81:1**; `#BF00FF` text = **4.22:1** (below WCAG AA 4.5 for normal text). | computed ratios | Medium |
| 7 | **No design tokens for radii/type.** Arbitrary `rounded-[2rem]/[2.5rem]/[3rem]`, 63 uses of `text-[10px]`, no spacing scale. | grep | Medium |
| 8 | **Dated typography.** Righteous (2011-era display face) + Poppins for everything; Google Fonts loaded through a blocking `@import`. | `app.css:1` | Medium |
| 9 | **Duplication.** 7 near-identical 51-line layout files; nav/footer repeated per layout. | `resources/views/layouts/pages/*` | Medium |
| 10 | **Admin unbranded.** Stock Filament login: "Laravel", orange primary, default font. | admin login screenshot | Medium |
| 11 | **Nav is a floating pill** over content with 5 dropdown groups; weak mobile affordance. | `navbar.blade.php` | Low |
| 12 | **Effects over content.** Neon glows everywhere, but no schedule, track history, or presenter strip on the home page. | home view | High |

**Verdict:** the current treatment is an early-2020s "glassmorphism + neon gradient" template. Modern audio sites have moved to editorial structure, one accent, real metadata, and quiet depth.

---

## 2. What the research says

### Award-winning radio/audio patterns
- **Persistent player is table stakes**, but it must be slim and non-intrusive, with live state + metadata; audio should never cut out while browsing.
- **One hot accent on a dark base** beats a multi-neon palette (e.g. Radio Radio, Awwwards SOTD, safety orange on black).
- **Bold typography and raw/editorial layout** beat corporate card grids; radio carries underground/community culture, not SaaS aesthetics.
- **Programme grids** are solved with horizontal timelines, drag-to-scroll schedules, and presenter cards that open in a drawer rather than a reload.
- **Real-time tracklisting** (now playing / recently played) is a defining feature of the best stations.

### Reference sites
| Site | Take from it |
|---|---|
| https://www.nts.live | The gold standard — stark black/white, text-as-design, dual live channels, real-time tracklisting, dense archive that stays scannable |
| https://www.kexp.org | Warm community/editorial balance: live stream + articles + Song of the Day + presenter hub |
| https://www.bbc.co.uk/sounds | Unambiguous "LIVE" language, next-up metadata, accessible controls |
| https://refugeworldwide.com | Tactile, human, photography-led; community radio can look warm rather than cyber |
| https://dublab.com | Archive-first information architecture, low-friction listening |
| https://www.rinse.fm | Schedule as the core object of the site |
| https://radio.garden | "Radio as place" — useful inspiration for a local/Eastern identity |

**Galleries:** [Awwwards Music](https://www.awwwards.com/websites/music/), [Refero](https://refero.design), [Minimal Gallery](https://minimal.gallery), [Godly](https://godly.website).

### Trend validation (2026)
- **Glassmorphism isn't dead; lazy glassmorphism is.** Modern use is sparing: nav bars, sticky headers, modals, micro-cards. Controlled background, modest blur (8–16px) for 60fps, text never sits directly on the blur.
- **Editorial bento** is the dominant content layout: asymmetric cells, high-contrast serif display paired with a neutral grotesk, generous whitespace, type treated as a graphic element.
- **Dark glass + one neon accent** works only as a system, not as a global theme.
- **Live-audio UX rules:** no scrubber for a live stream; label **Listen Live / Stop** (not "Pause"); explicit buffering text; `aria-live="polite"` for now-playing; `aria-pressed` on the toggle; visible focus states; space/`M` shortcuts.

---

## 3. Recommended direction: "Warm Editorial Radio"

Keep dark (it suits radio and evening listening), but ground the palette in the actual logo — not a cyber palette. One accent, real structure, quiet depth.

### Design tokens (drop-in for Tailwind v4 `@theme`)

```css
--color-ink:        #121110;  /* page base, replaces #0A0E27 */
--color-surface:    #1B1917;  /* cards */
--color-line:       #2E2A26;  /* 1px borders */
--color-cream:      #F5E9D7;  /* primary text — 15.7:1 */
--color-muted:      #A8A29A;  /* secondary text — 7.4:1 */
--color-brand:      #D8482C;  /* fills / large text only — 4.39:1 */
--color-brand-text: #F06A4D;  /* small text links — 6.2:1 */
--color-gold:       #E8B44A;  /* highlights — 9.9:1 */
```

### Typography
- Display: **Fraunces** or **Instrument Serif** for headlines.
- UI/body: **Inter** or **Geist**.
- Remove Righteous + Poppins.
- Self-host, subset, `font-display: swap`, remove the blocking `@import`.

### System rules
- **Radii:** 4 / 8 / 12 / 16 only (hero media may be the single exception).
- **Glass:** max 2 surfaces — floating nav and modal/drawer. Blur 12–16px, solid `--color-surface` behind text.
- **Motion:** 150–250ms, `ease-out`, transform/opacity only; respect `prefers-reduced-motion`; remove infinite `animate-pulse` blobs.
- **Backgrounds:** one static gradient or photo treatment; no 150px blobs.

---

## 4. Page-level changes

### Home
Rebuild as an editorial bento layout, above the fold:
1. **Hero:** live status + current show + one primary "Listen Live" + waveform/equalizer visual. Remove "Now Trending" badge and music-note watermark.
2. **Live strip:** On Air now / Next up / Recently played — always populated, never blank.
3. **Schedule preview:** today's timeline (horizontal scroll on mobile) with a "now" marker.
4. **Presenters row:** faces + show names; the human core of a community station.
5. **Editorial grid:** 1 lead story + 3 compact stories (the "Latest Frequency" idea is right; it needs real hierarchy).
6. **Song of the Week:** a card, not a full-width empty panel; fallback copy + CTA.
7. **Empty states for every module:** icon, one-line explanation, action.

### Programmes
Replace the blank page with a weekly grid: 7 columns on desktop, day tabs on mobile, current slot highlighted, presenter avatar + times, filter by day. Never render an empty page.

### News
The sidebar currently stacks alone because the main column is absent/empty. Fix to a `2fr 1fr` grid, add a featured post, pagination, and sidebar widgets with real fallbacks.

### Persistent player
Slim dock: 64–72px desktop, 56px mobile.
- Cover · show/track title · **LIVE** pill · play/stop · volume · expand-to-sheet on mobile.
- Label "Listen Live" / "Stop"; buffering spinner + text; error state with retry and "Stream offline, check back at HH:MM".
- Reserve space with a CSS variable tied to actual bar height (`env(safe-area-inset-bottom)` too).
- `aria-pressed`, `aria-live` for metadata, keyboard shortcuts, visible focus ring.

### Nav / footer
- One nav component; collapse the 7 duplicated layouts into 1 layout + sections.
- Nav: 6 items max; dropdowns as accessible `<details>`/Alpine with `aria-expanded`.
- Footer: logo, 3 link columns, newsletter, socials, legal — already close; fix logo overlap and raise 10px uppercase micro-copy to ≥12px.

### Gallery / presenters / metro
Same audit: real empty states, 4:5 portrait ratio for presenters, consistent card aspect ratios.

---

## 5. Admin (Filament 5)

1. `->brandName('Ogene 98.3 FM')`, `->brandLogo()`, favicon.
2. `->colors(['primary' => Color::hex('#D8482C')])` (or a generated 50–950 scale) in `AdminPanelProvider`.
3. `php artisan make:filament-theme admin` → custom theme CSS, self-host Inter, match radii.
4. Distinct login page (station imagery, "Studio login").
5. Dashboard: on-air now, today's schedule, latest posts, subscriber count, quick actions — not default widgets.
6. Dark mode by default (matches the public brand).

---

## 6. Accessibility + performance budget

**Fix**
- Text at `white/40` and `white/20` fails 4.5:1; purple `#BF00FF` text fails at 4.22:1.
- Visible focus states, nav dropdown semantics, mobile menu `aria-expanded`.
- One `<h1>` per page; `alt` text on all content images.
- Images: explicit `width`/`height` + `loading="lazy"` below the fold.

**Remove / reduce**
- 150px blurs, infinite pulses, 60 glass layers.
- Font Awesome full icon font for ~20 icons (subset or inline SVGs).

**Targets**
- LCP < 2.5s, CLS < 0.1, INP < 200ms on 4G.
- Self-host 2 font families (2–3 weights), preload the display font.
- `content-visibility: auto` on below-fold sections.

---

## 7. Phased plan

| Phase | Scope | Impact | Effort |
|---|---|---|---|
| **0. Foundations** | Token system in `app.css`, one shared layout, font swap, delete duplicate layouts | Unblocks everything | 1 day |
| **1. Player** | Slim dock, live states, a11y, reserved space, mobile sheet | Biggest perceived-quality jump | 1–2 days |
| **2. Home** | Bento rebuild, live strip, schedule preview, empty states | First impression | 2–3 days |
| **3. Core pages** | Programmes grid, presenters, news grid, gallery | Depth + credibility | 2–3 days |
| **4. Admin** | Filament branding, theme, dashboard | Staff experience | 1 day |
| **5. Polish** | Motion, a11y audit, perf budget, SEO/OG images | Quality | 1–2 days |

**Do not:** add more neon, more glass, more gradients, or another CSS framework. The gap is not "more effects" — it's structure, hierarchy, real metadata, and one coherent brand.

---

## Appendix: measured contrast

| Foreground | Background | Ratio | AA normal text |
|---|---|---|---|
| `#FFFFFF` | `#0A0E27` | 19.0:1 | Pass |
| `#39FF14` | `#0A0E27` | 14.02:1 | Pass |
| `#FFAA00` | `#0A0E27` | 9.96:1 | Pass |
| `rgba(255,255,255,.7)` | `#0A0E27` | 9.51:1 | Pass |
| `rgba(255,255,255,.5)` | `#0A0E27` | 5.26:1 | Pass |
| `#BF00FF` | `#0A0E27` | 4.22:1 | **Fail** |
| `rgba(255,255,255,.4)` | `#0A0E27` | 3.77:1 | **Fail** |
| `rgba(255,255,255,.2)` | `#0A0E27` | 1.81:1 | **Fail** |
| `#F5E9D7` (proposed) | `#121110` | 15.74:1 | Pass |
| `#F06A4D` (proposed) | `#121110` | 6.17:1 | Pass |
| `#E8B44A` (proposed) | `#121110` | 9.93:1 | Pass |
