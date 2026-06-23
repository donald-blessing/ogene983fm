@extends('layouts.pages.index')
@section('title')
Meet the On-Air Personalities
@endsection
@section('content')

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <!-- Breadcrumb -->
    <div class="flex items-center gap-2 text-white/40 text-sm font-medium mb-12">
        <a href="{{ route('home') }}" class="hover:text-secondary transition-colors"><i class="fa fa-home"></i> Home</a>
        <i class="fa fa-angle-right text-[10px]"></i>
        <span class="text-white">Our OAPs</span>
    </div>

    <div class="mb-24">
        <h1 class="text-6xl font-display text-white mb-6">
            The <span class="text-secondary italic">Voices</span> of the East
        </h1>
        <p class="text-xl text-white/50 max-w-2xl font-light">
            Meet the team bringing you the best in entertainment, culture, and highlife. Authentically local, professionally global.
        </p>
    </div>

    <!-- OAP Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12 mb-24">
        @foreach($presenters as $presenter)
        <div class="group">
            <div class="relative aspect-[3/4] rounded-[2.5rem] overflow-hidden glass-panel border-0 mb-8 group-hover:neon-border-purple transition-all duration-500">
                <img src="{{ $presenter->coverImage }}" alt="{{ $presenter->name }}" class="absolute inset-0 w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                <div class="absolute inset-0 bg-gradient-to-t from-bg-dark via-bg-dark/20 to-transparent"></div>
                
                <!-- Social Overlay -->
                <div class="absolute top-6 right-6 flex flex-col gap-3 translate-x-12 opacity-0 group-hover:translate-x-0 group-hover:opacity-100 transition-all duration-500">
                    @if($presenter->twitter_handle)
                    <a href="https://twitter.com/{{ ltrim($presenter->twitter_handle, '@') }}" target="_blank" class="w-10 h-10 rounded-full liquid-glass flex items-center justify-center text-white hover:bg-primary transition-colors">
                        <i class="fa fa-twitter"></i>
                    </a>
                    @endif
                    @if($presenter->instagram_handle)
                    <a href="https://instagram.com/{{ ltrim($presenter->instagram_handle, '@') }}" target="_blank" class="w-10 h-10 rounded-full liquid-glass flex items-center justify-center text-white hover:bg-secondary transition-colors">
                        <i class="fa fa-instagram"></i>
                    </a>
                    @endif
                </div>

                <div class="absolute bottom-8 left-8 right-8">
                    <h3 class="text-3xl text-white font-display">{{ $presenter->name }}</h3>
                    <p class="text-secondary text-[10px] font-black uppercase tracking-[0.2em] mt-2">On-Air Personality</p>
                </div>
            </div>

            <!-- Programmes / Schedule -->
            <div class="px-4">
                <h5 class="text-white/40 text-[10px] font-bold uppercase tracking-widest mb-4">Shows & Schedule</h5>
                <div class="space-y-4">
                    @foreach($presenter->programmes as $programme)
                    <div class="flex items-center justify-between gap-4">
                        <span class="text-white font-medium text-sm truncate">{{ $programme->title }}</span>
                        <div class="flex flex-col items-end shrink-0">
                            @foreach($programme->programmeTimes->take(1) as $schedule)
                            <span class="text-primary text-[10px] font-bold uppercase">{{ $schedule->day }}</span>
                            <span class="text-white/30 text-[9px]">{{ $schedule->from }} - {{ $schedule->to }}</span>
                            @endforeach
                        </div>
                    </div>
                    @endforeach
                </div>
                
                <a href="{{ route('presenter.show', ['presenter' => $presenter->slug]) }}" class="mt-8 inline-flex items-center text-xs font-black text-white hover:text-primary transition-colors tracking-widest uppercase">
                    View Profile <i class="fa fa-arrow-right ml-2"></i>
                </a>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection
