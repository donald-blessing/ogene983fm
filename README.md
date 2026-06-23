# Ogene 98.3 FM - Voice of the people

Ogene 98.3 FM is a premium digital broadcast platform and community hub dedicated to celebrating South-Eastern Nigerian culture. This application is built with a modern, "Fusion" aesthetic, bridging the gap between urban contemporary and indigenous broadcasting.

## 🚀 Vision
To provide a high-quality broadcasting experience that celebrates local culture and heritage while keeping the audience informed and entertained with the latest global and local happenings.

## ✨ Core Features

### 🎧 Professional Audio Experience
- **Persistent Player**: A seamless, global audio player that continues playing as users navigate the site.
- **Real-time Icecast Integration**: Dynamic "Now Playing" metadata powered by background polling and WebSocket broadcasting (Laravel Reverb).
- **Metadata Enrichment**: Automatic album art fetching via the iTunes Search API for a cinematic listening experience.
- **Smart Buffering**: Visual feedback for stream loading and connection status.

### 🎙️ On-Air & Programming
- **OAP Profiles**: Dedicated sections for On-Air Personalities with social media connectivity and show schedules.
- **Programme Schedule**: Interactive timetable of shows, ensuring listeners never miss their favorite frequency.
- **Digital Open Mic**: A "Hold to Record" feature allowing listeners to send 15-second voice shout-outs directly to the studio.

### 💬 Community & Engagement
- **Live Interactive Hub**: Real-time chat system for listeners to discuss shows and music live.
- **Loyalty Points System**: Reward listeners for engagement, daily logins, and content interaction.
- **Sponsorship & Ad Tracking**: Professional advertisement management with real-time impression and click-through analytics.

### 📰 Content Management
- **Fusion Blog**: A high-performance news and articles system with featured posts and category filtering.
- **SEO Optimized**: Automated sitemap generation and dynamic OpenGraph/Twitter meta tags for maximum social reach.
- **Liquid Glass UI**: A professional, dark-mode design system using Tailwind CSS and glassmorphism.

## 🛠️ Tech Stack
- **Framework**: Laravel 12 (Modernized Directory Structure)
- **Frontend**: Livewire 4, Alpine.js, Tailwind CSS 4
- **Real-time**: Laravel Reverb (WebSockets)
- **Database**: MySQL with performance-optimized indexing
- **Media**: Spatie MediaLibrary with automatic WebP conversion
- **Monitoring**: Laravel Horizon, Laravel Telescope, and Log Viewer UI

## 🏗️ Infrastructure & Security
- **Automated Backups**: Daily database and media snapshots via Spatie Laravel Backup.
- **Advanced Authorization**: Strict "Zero-Trust" security model using Laravel Policies.
- **Activity Auditing**: Full administrative audit trails powered by Spatie ActivityLog.
- **Modern Error Handling**: Beautiful, actionable error reporting via Spatie Ignition.

## 🏁 Getting Started

### Prerequisites
- PHP 8.4+
- Composer
- Node.js & NPM
- Redis (for Queues and WebSockets)

### Installation
1. Clone the repository
2. Install dependencies:
   ```bash
   composer install
   npm install
   ```
3. Configure your environment:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
4. Run migrations and seed data:
   ```bash
   php artisan migrate --seed
   ```
5. Build assets:
   ```bash
   npm run build
   ```
6. Start the servers:
   ```bash
   php artisan serve
   php artisan reverb:start
   php artisan queue:work
   ```

## 📜 License
The Ogene 98.3 FM platform is proprietary software. All rights reserved.
