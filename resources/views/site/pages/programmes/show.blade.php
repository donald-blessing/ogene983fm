@extends('layouts.pages.blog-details')
@section('title')
{{ $title }}
@endsection

@section('content')
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <a href="{{ route('home') }}"><i class="fa fa-home"></i> Home</a>
                    <a href="{{ route('programme.index') }}"> Programmes</a>
                    <span>{{ $programme->title }}</span>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="blog-details spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="blog-details-inner">
                    <div class="blog-detail-title">
                        <h2 class="text-4xl font-display text-white mb-4">{{ $programme->title }}</h2>
                        <div class="flex items-center gap-4 text-white/60 mb-8">
                            <span class="bg-primary/20 text-primary px-3 py-1 rounded-full text-xs font-bold uppercase tracking-tighter">Programme</span>
                        </div>
                    </div>
                    <div class="blog-large-pic mb-8 rounded-[2rem] overflow-hidden glass-panel border-0">
                        <img src="{{ $programme->coverImage }}" alt="{{ $programme->title }}" class="w-full">
                    </div>
                    <div class="blog-detail-desc text-white/80 leading-relaxed text-lg">
                        {!! $programme->description->about ?? 'No description available.' !!}
                    </div>

                    <!-- Episodes / Podcasts -->
                    <div class="mt-16">
                        <h3 class="text-3xl font-display text-white mb-8">Episodes <span class="text-secondary">Archive</span></h3>
                        <div class="space-y-6">
                            @forelse($programme->episodes()->latest()->get() as $episode)
                            <div class="liquid-glass rounded-2xl p-6 flex flex-col md:flex-row items-center gap-6 group hover:neon-border-purple transition-all">
                                <div class="w-full md:w-48 h-32 shrink-0 rounded-xl overflow-hidden glass-panel border-0">
                                    <img src="{{ $programme->coverImage }}" alt="" class="w-full h-full object-cover group-hover:scale-105 transition-transform">
                                </div>
                                <div class="flex-1 text-center md:text-left">
                                    <h5 class="text-xl text-white mb-2">{{ $episode->title }}</h5>
                                    <div class="flex flex-wrap justify-center md:justify-start items-center gap-4 text-white/40 text-xs mb-4">
                                        <span><i class="fa fa-calendar-o mr-1"></i> {{ $episode->published_at?->format('M d, Y') }}</span>
                                        <span><i class="fa fa-clock-o mr-1"></i> {{ $episode->duration }}</span>
                                    </div>
                                    <audio controls class="w-full h-8 opacity-60 hover:opacity-100 transition-opacity">
                                        <source src="{{ $episode->getFirstMediaUrl('audio') }}" type="audio/mpeg">
                                    </audio>
                                </div>
                            </div>
                            @empty
                            <div class="text-center py-12 glass-panel rounded-2xl">
                                <p class="text-white/30 italic">No archived episodes for this programme yet.</p>
                            </div>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="blog-sidebar">
                    <!-- Presenters -->
                    <div class="glass-panel rounded-[2rem] p-8 mb-10">
                        <h4 class="text-xl font-display text-white mb-6">Hosted By</h4>
                        <div class="space-y-6">
                            @foreach($programme->presenters as $presenter)
                            <a href="{{ route('presenter.show', $presenter->slug) }}" class="flex items-center gap-4 group">
                                <img src="{{ $presenter->avatar }}" alt="{{ $presenter->name }}" class="h-14 w-14 rounded-full object-cover ring-2 ring-white/10 group-hover:ring-primary transition-all">
                                <div>
                                    <h6 class="text-white group-hover:text-primary transition-colors">{{ $presenter->name }}</h6>
                                    <small class="text-white/40 uppercase tracking-tighter font-bold">On Air Personality</small>
                                </div>
                            </a>
                            @endforeach
                        </div>
                    </div>

                    @livewire('sponsorship-banner')
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
