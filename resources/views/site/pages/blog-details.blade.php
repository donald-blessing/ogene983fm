@extends('layouts.pages.blog-details')
@section('title')
{{ $title }}
@endsection

@section('content')

<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <!-- Breadcrumb -->
    <div class="flex items-center gap-2 text-white/40 text-sm font-medium mb-12">
        <a href="{{ route('home') }}" class="hover:text-secondary transition-colors"><i class="fa fa-home"></i> Home</a>
        @isset($breadcrumb)
            @isset($breadcrumb['route'])
            <i class="fa fa-angle-right text-[10px]"></i>
            <a href="{{ $breadcrumb['route'] }}" class="hover:text-secondary transition-colors">{{ $breadcrumb['category'] }}</a>
            @endisset
            <i class="fa fa-angle-right text-[10px]"></i>
            <span class="text-white">{{ $breadcrumb['title'] }}</span>
        @else
            <i class="fa fa-angle-right text-[10px]"></i>
            <span class="text-white">{{ $title }}</span>
        @endisset
    </div>

    <!-- Main Grid -->
    <div class="flex flex-col lg:flex-row gap-16 items-start mb-24">
        <!-- Content Column -->
        <article class="w-full lg:w-8/12">
            <header class="mb-12">
                <span class="text-primary text-[10px] font-black uppercase tracking-[0.3em] mb-4 block">
                    {{ $blog->category->name ?? ($blog->author ?? 'News Update') }}
                </span>
                <h1 class="text-4xl md:text-6xl font-display text-white mb-6 leading-tight">
                    {{ $blog->title }}
                </h1>
                <p class="text-white/40 text-sm flex items-center gap-4 font-medium uppercase tracking-widest">
                    <span><i class="fa fa-calendar-o mr-2 text-secondary"></i> {{ $blog->created_at->toFormattedDateString() }}</span>
                </p>
            </header>

            <div class="rounded-[2.5rem] overflow-hidden glass-panel border-0 mb-12 shadow-2xl">
                <img src="{{ $blog->cover_image }}" alt="{{ $blog->title }}" class="w-full object-cover max-h-[600px]">
            </div>

            <div class="prose prose-invert prose-lg max-w-none text-white/80 leading-relaxed space-y-8 font-light">
                {!! $blog->content !!}
            </div>

            <!-- Tags & Share -->
            <footer class="mt-16 pt-12 border-t border-white/5 flex flex-col md:flex-row justify-between items-center gap-8">
                @isset($blog->tags)
                <div class="flex flex-wrap gap-2">
                    @foreach ($blog->tags as $tag)
                    <span class="px-4 py-1.5 bg-white/5 border border-white/10 rounded-full text-[10px] font-bold uppercase tracking-widest text-white/60">
                        #{{ $tag->name }}
                    </span>
                    @endforeach
                </div>
                @endisset

                <div class="flex items-center gap-6">
                    <span class="text-[10px] font-black uppercase tracking-widest text-white/30">Share</span>
                    <div class="flex gap-4">
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ $blog->url }}" target="_blank" class="text-white/40 hover:text-primary transition-colors"><i class="fa fa-facebook"></i></a>
                        <a href="https://twitter.com/intent/tweet?text={{ urlencode($blog->title) }}&url={{ $blog->url }}" target="_blank" class="text-white/40 hover:text-secondary transition-colors"><i class="fa fa-twitter"></i></a>
                        <a href="https://wa.me/?text={{ $blog->url }}" target="_blank" class="text-white/40 hover:text-green-400 transition-colors"><i class="fa fa-whatsapp"></i></a>
                    </div>
                </div>
            </footer>

            <!-- Interactive Modules -->
            <div class="mt-24 space-y-16">
                @if ((\Route::current()->getName() == 'post.show')||(\Route::current()->getName() == 'discussion.show'))
                    <div class="glass-panel rounded-[3rem] p-10">
                        <h4 class="text-2xl font-display mb-8">Community <span class="text-primary">Voice</span></h4>
                        @comments(['model' => $blog])
                    </div>
                @endif

                @if (\Route::current()->getName() == 'discussion.show')
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                        @livewire('live-chat')
                        @livewire('voice-recorder')
                    </div>
                @endif
            </div>
        </article>

        <!-- Sidebar Column -->
        <aside class="w-full lg:w-4/12 sticky top-32 flex flex-col gap-10">
            @livewire('sponsorship-banner')

            <!-- Featured Album/Show could go here -->
            <div class="glass-panel rounded-3xl p-8 bg-gradient-to-br from-primary/10 to-transparent">
                <h5 class="text-white font-display text-lg mb-4">Frequency Update</h5>
                <p class="text-white/50 text-sm font-light italic">
                    You're listening to the pulse of the East. Stay tuned for authentic storytelling and highlife vibrations.
                </p>
            </div>
        </aside>
    </div>
</div>

@endsection
