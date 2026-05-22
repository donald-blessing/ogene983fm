# Phase 2: Visual Modernization Plan (Tailwind v4)

## Objective
Modernize the application's user interface by implementing a world-class "Liquid Glass" design system using Tailwind CSS v4, improving visual engagement, accessibility, and consistency across all platforms.

## 1. Design System: "Ogene Radio Fusion"
- **Typography**: 
    - Headings: `Righteous` (Musical, bold, energetic)
    - Body: `Poppins` (Clean, highly readable)
- **Color Palette**:
    - Primary: Electric Purple (#BF00FF)
    - Secondary: Neon Green (#39FF14)
    - Accent: Sunburst Orange (#FFAA00)
    - Background: Midnight Blue (#0A0E27) / OLED Black (#000000)
- **Effects**:
    - **Liquid Glass**: `backdrop-filter: blur(20px) saturate(180%)` with 1px translucent borders.
    - **Morphing Shapes**: Animated SVG background blobs for the hero and footer sections.

## 2. Implementation Steps

### Step 1: Tailwind v4 Integration
- [ ] Install Tailwind CSS v4.
- [ ] Configure `app.css` with the new v4 CSS-first configuration.
- [ ] Import Google Fonts (`Righteous` and `Poppins`) via `@import`.
- [ ] Define the "Radio Fusion" design tokens (colors, blur levels, spacing).

### Step 2: Global Layout Transformation
- [ ] **Navbar**: Refactor to a floating glassmorphic container with active state indicators.
- [ ] **Footer**: Modernize with block-based sections and neon accents.
- [ ] **Background**: Implement the morphing SVG background system globally.

### Step 3: Component Modernization
- [ ] **Persistent Player**: Rewrite with a high-fidelity "Liquid Glass" control bar, spectrum visualization hints, and neon-glow play buttons.
- [ ] **Sponsorship Banner**: Refactor to use subtle glass cards instead of standard Bootstrap alerts.
- [ ] **Blog Cards**: Implement consistent elevation and scale-on-hover effects.

### Step 4: Core View Refactoring
- [ ] **Home Page**: Complete overhaul of the hero section using the "Horizontal Scroll Journey" pattern recommendations.
- [ ] **Blog/Metro**: Standardize typography hierarchy and layout density.

## 3. Accessibility & UX Pass (WCAG 2.1)
- [ ] Ensure all neon colors meet the 4.5:1 contrast ratio against deep backgrounds.
- [ ] Implement focus rings for all interactive "glass" elements.
- [ ] Add `prefers-reduced-motion` support for morphing animations.

## 4. Verification & Testing
- [ ] Run **Playwright** visual regression tests (if configured).
- [ ] Audit with **Lighthouse** to ensure "Liquid Glass" blurs don't impact performance scores.
- [ ] Cross-browser validation (Chrome, Safari, Firefox).

## 5. Rollback Plan
- Revert `app.css`, `bootstrap.js`, and the modified Blade layouts/views.
