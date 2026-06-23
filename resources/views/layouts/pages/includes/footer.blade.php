<!-- Footer -->
<footer class="mt-24 border-t border-white/5 bg-bg-oled/30 backdrop-blur-xl">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-12 lg:gap-16">
            <!-- Brand Column -->
            <div class="lg:col-span-4">
                <a href="{{ route('home') }}" wire:navigate class="inline-block mb-8 transition-transform hover:scale-105">
                    <img src="{{ asset('images/logo.png') }}" alt="Ogene 98.3 FM" class="h-12 w-auto">
                </a>
                <p class="text-white/50 text-sm leading-relaxed mb-8 max-w-sm">
                    The Voice of the People. Ogene 98.3 FM is the heartbeat of the East, bringing you the best in entertainment, news, and culture.
                </p>
                <div class="flex gap-4">
                    <a href="https://www.facebook.com/ogene983fm" target="_blank" class="w-10 h-10 rounded-xl glass-panel flex items-center justify-center text-white/40 hover:text-primary hover:neon-border-purple transition-all">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a href="https://twitter.com/ogenefm983" target="_blank" class="w-10 h-10 rounded-xl glass-panel flex items-center justify-center text-white/40 hover:text-secondary hover:neon-border-green transition-all">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a href="https://instagram.com/ogene983fm" target="_blank" class="w-10 h-10 rounded-xl glass-panel flex items-center justify-center text-white/40 hover:text-accent hover:shadow-[0_0_15px_rgba(255,170,0,0.3)] transition-all">
                        <i class="fa fa-instagram"></i>
                    </a>
                </div>
            </div>

            <!-- Links Column -->
            <div class="lg:col-span-4 grid grid-cols-2 gap-8">
                <div>
                    <h5 class="font-display text-white mb-6 uppercase tracking-widest text-xs">Explore</h5>
                    <ul class="space-y-4">
                        <li><a href="{{ route('home') }}" wire:navigate class="text-white/40 hover:text-secondary text-sm transition-colors">Home</a></li>
                        <li><a href="{{ route('metro.index') }}" wire:navigate class="text-white/40 hover:text-secondary text-sm transition-colors">Metro</a></li>
                        <li><a href="{{ route('post.index') }}" wire:navigate class="text-white/40 hover:text-secondary text-sm transition-colors">News</a></li>
                        <li><a href="{{ route('gallery.album.index') }}" wire:navigate class="text-white/40 hover:text-secondary text-sm transition-colors">Gallery</a></li>
                    </ul>
                </div>
                <div>
                    <h5 class="font-display text-white mb-6 uppercase tracking-widest text-xs">Station</h5>
                    <ul class="space-y-4">
                        <li><a href="{{ route('about') }}" wire:navigate class="text-white/40 hover:text-secondary text-sm transition-colors">About Us</a></li>
                        <li><a href="{{ route('programme.index') }}" wire:navigate class="text-white/40 hover:text-secondary text-sm transition-colors">Programmes</a></li>
                        <li><a href="{{ route('presenter.index') }}" wire:navigate class="text-white/40 hover:text-secondary text-sm transition-colors">OAPs</a></li>
                        <li><a href="{{ route('contact') }}" wire:navigate class="text-white/40 hover:text-secondary text-sm transition-colors">Contact</a></li>
                    </ul>
                </div>
            </div>

            <!-- Newsletter Column -->
            <div class="lg:col-span-4">
                <h5 class="font-display text-white mb-6 uppercase tracking-widest text-xs text-primary">Stay in the Loop</h5>
                <p class="text-white/40 text-sm mb-6 font-light italic">
                    Subscribe to our newsletter for the latest frequency updates.
                </p>
                <form action="{{ route('newsletter.subscribe') }}" method="POST" class="relative group">
                    @csrf
                    <input type="email" placeholder="Email address..." name="email" required
                           class="input-fusion w-full !rounded-2xl !pr-24 text-sm">
                    <button type="submit" class="absolute right-1.5 top-1.5 bottom-1.5 px-4 bg-primary text-white rounded-xl font-bold text-[10px] uppercase tracking-widest hover:bg-primary/80 transition-colors">
                        Join
                    </button>
                </form>
            </div>
        </div>

        <div class="mt-16 pt-8 border-t border-white/5 flex flex-col md:flex-row justify-between items-center gap-4">
            <p class="text-white/20 text-[10px] uppercase font-bold tracking-[0.3em]">
                &copy; {{ date('Y') }} Ogene 98.3 FM. All Rights Reserved.
            </p>
            <div class="flex gap-6">
                <span class="text-white/20 text-[10px] uppercase font-bold tracking-widest italic">{{ app(\App\Settings\GeneralSettings::class)->site_motto }}</span>
            </div>
        </div>
    </div>
</footer>

<!-- Modern Interaction Scripts -->
<script src="https://kit.fontawesome.com/your-kit-id.js" crossorigin="anonymous"></script>
@stack('js')
@livewireScripts
