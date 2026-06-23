@extends('layouts.pages.index')
@section('title')
Authentically Eastern
@endsection
@section('content')

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <!-- Hero Section -->
    <div class="flex flex-col lg:flex-row gap-8 items-stretch mb-24">
        <!-- Main Hero Card -->
        <div class="w-full lg:w-8/12 glass-panel rounded-[2rem] p-8 md:p-12 relative overflow-hidden group flex flex-col justify-center">
            <div class="absolute top-0 right-0 p-8 opacity-10 group-hover:rotate-12 transition-transform duration-1000">
                <i class="fa fa-music text-[10rem]"></i>
            </div>
            
            <span class="inline-block bg-secondary text-bg-dark font-black px-4 py-1 rounded-full uppercase tracking-tighter text-xs mb-6 w-fit">
                Now Trending
            </span>
            
            <h1 class="text-5xl md:text-7xl font-display text-white mb-6 leading-tight">
                Authentically <br><span class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-secondary italic leading-none">Eastern</span>
            </h1>
            
            <p class="text-xl text-white/70 max-w-xl mb-10 leading-relaxed font-light">
                Voice of the East, bringing you the best in highlife, local news, and community stories. 98.3 FM – Staying true to our roots.
            </p>
            
            <div class="flex flex-wrap gap-4">
                <button @click="$dispatch('toggle-player')" class="btn-fusion-primary group/btn flex items-center gap-3">
                    <i class="fa fa-play-circle text-2xl group-hover/btn:scale-110 transition-transform"></i>
                    Listen Live
                </button>
                <a href="{{ route('about') }}" wire:navigate class="btn-fusion liquid-glass hover:bg-white/10 flex items-center gap-2">
                    Our Story
                </a>
            </div>
        </div>

        <!-- On Air & Loyalty Widgets -->
        <div class="w-full lg:w-4/12 flex flex-col gap-6">
            <div class="glass-panel rounded-3xl p-6 border-l-4 border-secondary flex-1">
                <h4 class="text-secondary mb-6 flex items-center gap-2">
                    <span class="h-2 w-2 bg-secondary rounded-full animate-ping"></span>
                    On Air Now
                </h4>
                @if($programmes->isNotEmpty())
                    @php $onAir = $programmes->first(); @endphp
                    <div class="flex items-center gap-4">
                        <img src="{{ $onAir->coverImage }}" alt="{{ $onAir->title }}" class="h-20 w-20 rounded-2xl object-cover ring-2 ring-white/10 shrink-0">
                        <div class="min-w-0">
                            <h5 class="text-white text-lg truncate">{{ $onAir->title }}</h5>
                            <p class="text-white/50 text-sm italic">With your favorite OAPs</p>
                        </div>
                    </div>
                @else
                    <p class="text-white/40 italic">Ogene Mix Session</p>
                @endif
            </div>

            <!-- Loyalty Mini-Card -->
            @auth
            <div class="glass-panel rounded-3xl p-6 bg-gradient-to-br from-primary/20 to-transparent flex-1">
                <div class="flex justify-between items-start mb-4">
                    <h5 class="text-white">Your Rewards</h5>
                    <i class="fa fa-star text-accent animate-spin-slow"></i>
                </div>
                <p class="text-4xl font-display text-white mb-1">{{ auth()->user()->loyalty_points }}</p>
                <p class="text-white/50 text-[10px] uppercase font-bold tracking-widest">Ogene Points</p>
                <a href="{{ route('dashboard') }}" class="mt-6 block text-center py-2.5 rounded-xl bg-white/5 hover:bg-white/10 transition-colors text-xs font-bold">Manage Account</a>
            </div>
            @endauth
        </div>
    </div>

    <!-- Categories Grid -->
    <div class="mb-24">
        <div class="flex items-end justify-between mb-12">
            <div>
                <h2 class="text-4xl text-white">Explore <span class="text-secondary">Vibrations</span></h2>
                <p class="text-white/50 mt-2">Music, Culture, News, and Everything In-Between</p>
            </div>
            <a href="{{ route('post.index') }}" wire:navigate class="hidden sm:block text-primary font-bold hover:text-white transition-colors">View All News →</a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($categories->take(6) as $category)
            <a href="{{ route('post.category', ['category' => $category->slug]) }}" wire:navigate class="group relative aspect-[4/3] rounded-[2.5rem] overflow-hidden glass-panel border-0 hover:neon-border-purple transition-all duration-500">
                <img src="{{ $category->coverImage }}" alt="{{ $category->name }}" class="absolute inset-0 w-full h-full object-cover opacity-60 group-hover:scale-110 group-hover:opacity-80 transition-all duration-700">
                <div class="absolute inset-0 bg-gradient-to-t from-bg-dark via-bg-dark/20 to-transparent"></div>
                
                <div class="absolute bottom-8 left-8 right-8">
                    <span class="text-secondary text-[10px] font-black uppercase tracking-[0.2em] mb-2 block">{{ $category->posts->count() }} Updates</span>
                    <h3 class="text-3xl text-white group-hover:translate-x-2 transition-transform duration-500">{{ $category->name }}</h3>
                </div>
            </a>
            @endforeach
        </div>
    </div>

    <!-- News & Features Section -->
    <div class="glass-panel rounded-[3rem] p-8 md:p-16 border-white/5 mb-24">
        <div class="flex flex-col lg:flex-row gap-16">
            <!-- Latest Blog -->
            <div class="w-full lg:w-7/12">
                <h2 class="text-4xl mb-12">Latest <span class="text-primary font-display">Frequency</span></h2>
                <div class="space-y-10">
                    @foreach($posts->take(3) as $post)
                    <a href="{{ route('post.show', ['category' => $post->category->slug, 'post' => $post->slug]) }}" wire:navigate class="flex gap-6 group">
                        <div class="w-24 h-24 shrink-0 rounded-2xl overflow-hidden glass-panel border-0">
                            <img src="{{ $post->coverImage }}" alt="{{ $post->title }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                        </div>
                        <div class="min-w-0">
                            <span class="text-primary text-[10px] font-bold uppercase tracking-widest">{{ $post->category->name }}</span>
                            <h4 class="text-xl text-white group-hover:text-secondary transition-colors line-clamp-2 mt-1">{{ $post->title }}</h4>
                            <div class="flex items-center gap-4 mt-2 text-white/40 text-xs">
                                <span><i class="fa fa-calendar-o mr-1"></i> {{ $post->created_at->format('M d') }}</span>
                                <span><i class="fa fa-comment-o mr-1"></i> {{ $post->comments_count }}</span>
                            </div>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>

            <!-- Song of the Week -->
            <div class="w-full lg:w-5/12">
                <div class="sticky top-32">
                    <h2 class="text-4xl mb-12 text-right">Ogene <span class="text-accent font-display">Star</span></h2>
                    @if($songOfTheWeek)
                    <div class="liquid-glass rounded-[2rem] p-10 text-center border-accent/20">
                        <div class="relative w-48 h-48 mx-auto mb-8">
                            <div class="absolute inset-0 bg-accent/20 blur-[40px] animate-pulse rounded-full"></div>
                            <img src="{{ $songOfTheWeek->getFirstMediaUrl('album_arts') }}" alt="{{ $songOfTheWeek->title }}" class="relative w-full h-full rounded-full object-cover border-4 border-accent/50 animate-spin-slow">
                        </div>
                        <h3 class="text-2xl text-white mb-2 font-display">{{ $songOfTheWeek->title }}</h3>
                        <p class="text-accent font-bold text-lg mb-8">{{ $songOfTheWeek->artist }}</p>
                        <div class="flex justify-center">
                            <span class="px-8 py-2.5 rounded-full bg-accent text-bg-dark font-black text-xs tracking-widest">SONG OF THE WEEK</span>
                        </div>
                    </div>
                    @else
                    <div class="liquid-glass rounded-[2rem] p-12 text-center text-white/30 italic">
                        Selecting this week's favorite...
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
