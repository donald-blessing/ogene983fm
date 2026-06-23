<!-- Navigation -->
<nav class="fixed top-6 left-1/2 -translate-x-1/2 w-[95%] max-w-7xl z-[1000] bg-white/5 backdrop-blur-xl border border-white/10 rounded-3xl px-6 py-3" x-data="{ open: false }">
    <div class="flex items-center justify-between">
        <!-- Logo -->
        <a href="{{ route('home') }}" wire:navigate class="shrink-0 transition-transform hover:scale-105 flex items-center">
            <img src="{{ asset('images/logo.png') }}" alt="Ogene 98.3 FM" class="h-10 w-auto" style="max-height: 40px;">
        </a>

        <!-- Desktop Menu -->
        <div class="hidden lg:flex items-center gap-8">
            <a href="{{ route('home') }}" wire:navigate class="font-medium text-white/80 hover:text-secondary transition-colors {{ Route::is('home') ? 'text-secondary' : '' }}">Home</a>
            <a href="{{ route('metro.index') }}" wire:navigate class="font-medium text-white/80 hover:text-secondary transition-colors {{ Route::is('metro.*') ? 'text-secondary' : '' }}">Metro</a>
            <a href="{{ route('discussion.index') }}" wire:navigate class="font-medium text-white/80 hover:text-secondary transition-colors {{ Route::is('discussion.*') ? 'text-secondary' : '' }}">Today's Show</a>
            
            <div class="relative group" x-data="{ show: false }" @mouseenter="show = true" @mouseleave="show = false">
                <a href="{{ route('post.index') }}" wire:navigate class="flex items-center gap-1 font-medium text-white/80 hover:text-secondary transition-colors {{ Route::is('post.*') ? 'text-secondary' : '' }}">
                    News <i class="fa fa-angle-down text-xs"></i>
                </a>
                <div class="absolute top-full left-0 pt-4" x-show="show" x-transition x-cloak>
                    <div class="glass-panel rounded-2xl p-4 min-w-[200px] flex flex-col gap-2">
                        @isset($categories)
                            @foreach ($categories as $category)
                            <a href="{{ route('post.category', ['category' => $category->slug]) }}" wire:navigate class="text-white/70 hover:text-secondary transition-colors text-sm py-1 border-b border-white/5 last:border-0">{{ $category->name }}</a>
                            @endforeach
                        @endisset
                    </div>
                </div>
            </div>

            <a href="{{ route('gallery.album.index') }}" wire:navigate class="font-medium text-white/80 hover:text-secondary transition-colors {{ Route::is('gallery.*') ? 'text-secondary' : '' }}">Gallery</a>
            
            <div class="relative group" x-data="{ show: false }" @mouseenter="show = true" @mouseleave="show = false">
                <button class="flex items-center gap-1 font-medium text-white/80 hover:text-secondary transition-colors">
                    About <i class="fa fa-angle-down text-xs"></i>
                </button>
                <div class="absolute top-full left-0 pt-4" x-show="show" x-transition x-cloak>
                    <div class="glass-panel rounded-2xl p-4 min-w-[180px] flex flex-col gap-2">
                        <a href="{{ route('about') }}" wire:navigate class="text-white/70 hover:text-secondary transition-colors text-sm py-1 border-b border-white/5">Station Info</a>
                        <a href="{{ route('programme.index') }}" wire:navigate class="text-white/70 hover:text-secondary transition-colors text-sm py-1 border-b border-white/5">Programmes</a>
                        <a href="{{ route('presenter.index') }}" wire:navigate class="text-white/70 hover:text-secondary transition-colors text-sm py-1">OAPs</a>
                    </div>
                </div>
            </div>
            
            <a href="{{ route('contact') }}" wire:navigate class="font-medium text-white/80 hover:text-secondary transition-colors {{ Route::is('contact') ? 'text-secondary' : '' }}">Contact</a>
        </div>

        <!-- Right Side: Search & User -->
        <div class="flex items-center gap-4">
            <div class="hidden md:flex items-center bg-white/5 border border-white/10 rounded-full px-4 py-1.5 focus-within:border-primary/50 transition-all">
                <form action="{{ route('search') }}" method="GET" class="flex items-center">
                    <input name="search" type="text" placeholder="Search..." class="bg-transparent border-none focus:ring-0 text-sm w-32 xl:w-48 text-white placeholder-white/40">
                    <button type="submit" class="text-white/60 hover:text-secondary"><i class="fa fa-search"></i></button>
                </form>
            </div>

            @guest
            <a href="{{ route('login') }}" class="btn-fusion-primary px-5 py-2 text-sm !rounded-xl">Login</a>
            @else
            <div class="relative" x-data="{ openUser: false }" @click.away="openUser = false">
                <button @click="openUser = !openUser" class="h-10 w-10 rounded-full border-2 border-primary/50 overflow-hidden transition-transform active:scale-90">
                    <img src="{{ auth()->user()->avatar }}" alt="{{ auth()->user()->name }}" class="h-full w-full object-cover">
                </button>
                <div class="absolute top-full right-0 mt-4" x-show="openUser" x-transition x-cloak>
                    <div class="glass-panel rounded-2xl p-4 min-w-[200px] flex flex-col gap-3">
                        <div class="pb-2 border-b border-white/10">
                            <p class="font-display text-sm truncate text-white">{{ auth()->user()->name }}</p>
                            <p class="text-secondary text-[10px] uppercase font-bold">{{ auth()->user()->loyalty_points }} Ogene Points</p>
                        </div>
                        @role('admin|super admin|presenter')
                        <a href="{{ route('dashboard') }}" class="flex items-center gap-2 text-sm text-white/70 hover:text-secondary transition-colors"><i class="fa fa-briefcase opacity-50"></i> Dashboard</a>
                        @endrole
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="flex items-center gap-2 text-sm text-red-400 hover:text-red-300 transition-colors">
                            <i class="fa fa-sign-out opacity-50"></i> Logout
                        </a>
                    </div>
                </div>
            </div>
            @endguest

            <!-- Mobile Toggle -->
            <button class="lg:hidden h-10 w-10 flex items-center justify-center text-xl text-white" @click="open = !open">
                <i class="fa" :class="open ? 'fa-times' : 'fa-bars'"></i>
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div class="lg:hidden mt-4 pt-4 border-t border-white/10 flex flex-col gap-4 overflow-y-auto max-h-[70vh]" x-show="open" x-transition x-cloak>
        <a href="{{ route('home') }}" wire:navigate class="text-lg font-display text-white">Home</a>
        <a href="{{ route('metro.index') }}" wire:navigate class="text-lg font-display text-white">Metro</a>
        <a href="{{ route('discussion.index') }}" wire:navigate class="text-lg font-display text-white">Today's Show</a>
        <a href="{{ route('post.index') }}" wire:navigate class="text-lg font-display text-white">News & Events</a>
        <a href="{{ route('gallery.album.index') }}" wire:navigate class="text-lg font-display text-white">Gallery</a>
        <a href="{{ route('programme.index') }}" wire:navigate class="text-lg font-display text-white">Programmes</a>
        <a href="{{ route('presenter.index') }}" wire:navigate class="text-lg font-display text-white">OAPs</a>
        <a href="{{ route('contact') }}" wire:navigate class="text-lg font-display text-white">Contact</a>
        
        <div class="md:hidden mt-2 p-3 bg-white/5 rounded-2xl border border-white/10">
            <form action="{{ route('search') }}" method="GET" class="flex items-center">
                <input name="search" type="text" placeholder="Search..." class="bg-transparent border-none focus:ring-0 flex-1 text-sm text-white">
                <button type="submit" class="text-white/60"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </div>
</nav>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    @csrf
</form>

@push('css')
@livewireStyles
@endpush

@push('js')
@livewireScripts
@endpush
