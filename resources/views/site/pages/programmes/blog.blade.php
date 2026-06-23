@extends('layouts.pages.blog')
@section('title')
Our Frequency
@endsection
@section('content')

<!-- Breadcrumb Section -->
<div class="px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto mb-12">
    <div class="flex items-center gap-2 text-white/40 text-sm font-medium">
        <a href="{{ route('home') }}" class="hover:text-secondary transition-colors"><i class="fa fa-home"></i> Home</a>
        <i class="fa fa-angle-right text-[10px]"></i>
        <span class="text-white">Programmes</span>
    </div>
</div>

<!-- Programmes Grid Section -->
<section class="px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto mb-24">
    <div class="flex items-end justify-between mb-12 border-l-4 border-primary pl-6">
        <div>
            <h2 class="text-5xl font-display text-white italic">Ogene <span class="text-secondary">Lineup</span></h2>
            <p class="text-white/40 mt-2 tracking-widest uppercase text-xs font-black">Stay connected with our daily frequency</p>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
        @foreach ($programmes as $programme)
        @php
            $time = $programme->programmeTimes;
            $time->each(function ($item) {
                $item->day = $item->day.'s';
            });
        @endphp
        
        <div class="card-fusion flex flex-col group h-full">
            <!-- Programme Cover -->
            <div class="aspect-square overflow-hidden relative">
                <a href="{{ route('programme.show', ['programme' => $programme->slug]) }}">
                    <img src="{{ $programme->coverImage }}" alt="{{ $programme->title }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                </a>
                
                <!-- Time Badge -->
                <div class="absolute top-6 left-6">
                    <div class="liquid-glass px-4 py-2 rounded-2xl border-white/20">
                        <p class="text-[10px] font-black text-secondary uppercase tracking-widest">
                            {{ $time->first()?->from }} - {{ $time->first()?->to }}
                        </p>
                    </div>
                </div>

                <!-- Gradient Overlay -->
                <div class="absolute inset-0 bg-gradient-to-t from-bg-dark via-transparent to-transparent opacity-60"></div>
            </div>

            <div class="p-8 flex-1 flex flex-col">
                <h4 class="text-2xl font-display text-white mb-4 group-hover:text-primary transition-colors">
                    {{ $programme->title }}
                </h4>
                
                <p class="text-white/50 text-sm leading-relaxed mb-8 line-clamp-3 italic">
                    {{ $programme->about }}
                </p>

                <div class="mt-auto flex flex-col gap-6">
                    <!-- Schedule Info -->
                    <div class="flex items-center gap-3 text-white/30 text-xs font-bold uppercase tracking-tighter">
                        <i class="fa fa-calendar-o text-primary"></i>
                        <span>Every {{ $time->implode('day', ', ') }}</span>
                    </div>

                    <!-- Presenters -->
                    @if($programme->presenters->isNotEmpty())
                    <div class="flex -space-x-3 items-center">
                        @foreach($programme->presenters->take(3) as $presenter)
                        <img src="{{ $presenter->avatar }}" alt="{{ $presenter->name }}" 
                             class="w-10 h-10 rounded-full border-2 border-bg-dark object-cover ring-2 ring-white/5" 
                             title="{{ $presenter->name }}">
                        @endforeach
                        @if($programme->presenters->count() > 3)
                        <div class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center text-[10px] font-bold text-white border-2 border-bg-dark ring-2 ring-white/5">
                            +{{ $programme->presenters->count() - 3 }}
                        </div>
                        @endif
                        <span class="ml-4 text-[10px] text-white/40 font-bold uppercase tracking-widest">Studio Cast</span>
                    </div>
                    @endif

                    <a href="{{ route('programme.show', ['programme' => $programme->slug]) }}" 
                       class="btn-fusion liquid-glass !py-3 !px-8 hover:bg-primary hover:text-white transition-all text-xs font-black uppercase tracking-[0.2em] mt-2">
                        View Show Log
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>

@endsection
