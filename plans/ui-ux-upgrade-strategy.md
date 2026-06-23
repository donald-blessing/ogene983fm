# UI/UX Audit & Upgrade Strategy

## 1. Visual Identity & Foundation
- **The Gap**: The application is in a transitional state with a modern dark layout but legacy component styles (Bootstrap 4 remnants).
- **Upgrade**: Fully unify the **"Radio Fusion"** Liquid Glass design system.
    - **Typography**: Apply `font-display` (Righteous) to all headings and `font-sans` (Poppins) to all body text.
    - **Global Theme**: Shift from standard whites and grays to translucent whites (`bg-white/5`) and semantic primary/secondary accents.

## 2. Core Page Upgrades

### A. Blog & News Index (`site.pages.blog`)
- **Current Issue**: Legacy sidebar layout and static grid with fixed-size images.
- **Upgrade**:
    - Implement a **Dynamic Masonry Grid** for blog posts to feel more editorial.
    - Use **Glassmorphic Sidebar** components with neon-border active states.
    - Replace standard Bootstrap pagination with a sleek, rounded Tailwind alternative.
    - Add **Micro-interactions**: Hover scale effects (1.05x) and subtle 500ms transitions on all cards.

### B. Contact Page (`site.pages.contact`)
- **Current Issue**: Standard white-background form and heavy Google Maps iframe.
- **Upgrade**:
    - Wrap the contact form in a large **Liquid Glass panel**.
    - Replace the standard `site-btn` with the `btn-fusion-primary` pattern.
    - Use **Icon-only Visuals** for contact details, utilizing neon-tinted glyphs (Lucide/Heroicons via FontAwesome).

### C. Programme & Presenter Profiles
- **Current Issue**: Flat layouts that don't emphasize the "personality" of the station.
- **Upgrade**:
    - **Presenter Hero**: Use large circular avatars with neon glows.
    - **Programme Schedule**: Transform into a high-contrast "Dark Mode Timeline" using secondary color accents (Neon Green).

## 3. Interaction & UX Polish
- **Loading Experience**: Implement **Skeleton Screens** using Tailwind's `animate-pulse` for blog images and real-time components.
- **Form Feedback**: Add real-time validation visualizers (neon-red/green border shifts) using Alpine.js.
- **Accessibility**: Standardize touch targets to **48px minimum** for all mobile buttons (Player controls, Nav links).

## 4. Prioritized Implementation Roadmap

| Priority | Action | Tech |
| :--- | :--- | :--- |
| **P0** | **Global Typography & Button Standardization** | Tailwind v4 |
| **P0** | **Modernize Blog Cards & Grid** | Tailwind v4 |
| **P1** | **Glassmorphic Sidebar Refactor** | Tailwind v4 |
| **P1** | **Contact Form Liquid Glass Wrapping** | Tailwind v4 |
| **P2** | **Skeleton Screen Implementation** | Alpine.js |

---
**Prepared by**: Senior UI/UX Developer  
**Status**: Ready for Implementation
