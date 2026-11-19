@extends('layouts.site')

@section('title', $title . ' · Ogene 98.3 FM')

@section('content')
@php
    $routeName = \Illuminate\Support\Facades\Route::currentRouteName();
    $shareUrl = urlencode($blog->url ?? url()->current());
    $shareTitle = urlencode($blog->title ?? '');
@endphp

<div class="border-b border-line bg-surface/20">
    <div class="container-page py-8 sm:py-10">
        <x-ui.breadcrumb :items="[
            ['label' => $breadcrumb['category'] ?? 'News', 'href' => $breadcrumb['route'] ?? route('post.index')],
            ['label' => $breadcrumb['title'] ?? ($blog->title ?? $title)],
        ]" />
    </div>
</div>

<article class="container-page py-10 sm:py-12">
    <div class="grid gap-12 lg:grid-cols-12 lg:gap-10">
        <div class="lg:col-span-8">
            <header class="max-w-[68ch]">
                @if ($blog->category)
                    <a
                        href="{{ route('post.category', ['category' => $blog->category->slug]) }}"
                        wire:navigate
                        class="text-[11px] font-semibold uppercase tracking-[0.14em] text-brand-text transition-colors hover:text-paper"
                    >
                        {{ $blog->category->name }}
                    </a>
                @endif

                <h1 class="mt-3 text-[clamp(1.9rem,4.4vw,3rem)] font-bold leading-[1.06] tracking-[-0.03em] text-paper">
                    {{ $blog->title }}
                </h1>

                <p class="mt-4 flex flex-wrap items-center gap-x-3 gap-y-1 text-[12px] uppercase tracking-[0.1em] text-faint">
                    @if ($blog->created_at)
                        <span>{{ $blog->created_at->format('F j, Y') }}</span>
                    @endif

                    @if (isset($blog->comments_count))
                        <span class="h-3 w-px bg-line" aria-hidden="true"></span>
                        <span>{{ $blog->comments_count }} {{ \Illuminate\Support\Str::plural('comment', $blog->comments_count) }}</span>
                    @endif
                </p>
            </header>

            @if ($blog->coverImage ?? null)
                <div class="mt-8 overflow-hidden rounded-md border border-line bg-surface-2">
                    <img src="{{ $blog->coverImage }}" alt="{{ $blog->title }}" class="max-h-[560px] w-full object-cover">
                </div>
            @endif

            <div class="prose-ogene mt-9 max-w-[68ch] text-[16px] leading-[1.75] text-muted">
                {!! $blog->content ?? '' !!}
            </div>

            <footer class="mt-12 flex flex-col gap-6 border-t border-line pt-7 sm:flex-row sm:items-center sm:justify-between">
                @if (($blog->tags ?? collect())->isNotEmpty())
                    <ul class="flex flex-wrap gap-1.5">
                        @foreach ($blog->tags as $tag)
                            <li>
                                <a
                                    href="{{ route('tag.show', ['tag' => $tag->slug]) }}"
                                    class="inline-flex rounded-xs border border-line px-2 py-1 font-mono text-[11px] uppercase tracking-[0.08em] text-muted transition-colors hover:border-brand/50 hover:text-paper"
                                >
                                    #{{ $tag->name }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                @endif

                <div class="flex items-center gap-3">
                    <span class="text-[11px] font-semibold uppercase tracking-[0.14em] text-faint">Share</span>

                    <div class="flex gap-1.5">
                        <a
                            href="https://www.facebook.com/sharer/sharer.php?u={{ $shareUrl }}"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="Share on Facebook"
                            class="flex h-9 w-9 items-center justify-center rounded-sm border border-line text-muted transition-colors hover:border-brand/50 hover:text-paper"
                        >
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>

                        <a
                            href="https://twitter.com/intent/tweet?text={{ $shareTitle }}&url={{ $shareUrl }}"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="Share on X"
                            class="flex h-9 w-9 items-center justify-center rounded-sm border border-line text-muted transition-colors hover:border-brand/50 hover:text-paper"
                        >
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>

                        <a
                            href="https://wa.me/?text={{ $shareUrl }}"
                            target="_blank"
                            rel="noopener noreferrer"
                            aria-label="Share on WhatsApp"
                            class="flex h-9 w-9 items-center justify-center rounded-sm border border-line text-muted transition-colors hover:border-brand/50 hover:text-paper"
                        >
                            <i class="fa fa-whatsapp" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </footer>

            @if ($routeName === 'post.show' || $routeName === 'discussion.show')
                <div class="mt-12 border-t border-line pt-8">
                    <h2 class="text-[22px] font-bold tracking-[-0.02em] text-paper">Join the conversation</h2>
                    <p class="mt-1.5 text-sm text-muted">Your take matters — add a comment below.</p>

                    <div class="mt-6">
                        @comments(['model' => $blog])
                    </div>
                </div>
            @endif

            @if ($routeName === 'discussion.show')
                <div class="mt-10 grid gap-6 md:grid-cols-2">
                    @livewire('live-chat')
                    @livewire('voice-recorder')
                </div>
            @endif
        </div>

        <aside class="lg:col-span-4">
            <div class="sticky top-24 flex flex-col gap-6">
                @livewire('sponsorship-banner')

                <div class="surface p-5">
                    <h2 class="text-[11px] font-semibold uppercase tracking-[0.14em] text-faint">Frequency update</h2>
                    <p class="mt-3 text-[13px] leading-relaxed text-muted">
                        You're reading the pulse of the East. Tune in to 98.3 FM for authentic storytelling and highlife.
                    </p>

                    <div class="mt-4">
                        <x-ui.button href="{{ route('listen') }}" wire:navigate size="sm">
                            <x-ui.icon name="play" :size="14" />
                            Listen live
                        </x-ui.button>
                    </div>
                </div>

                <div class="rounded-lg border border-line bg-surface/40 p-5">
                    <h2 class="text-[15px] font-semibold text-paper">More from the newsroom</h2>
                    <p class="mt-1.5 text-[13px] leading-relaxed text-muted">Browse every story, topic and event.</p>

                    <div class="mt-4">
                        <x-ui.button href="{{ route('post.index') }}" wire:navigate variant="secondary" size="sm">All news</x-ui.button>
                    </div>
                </div>
            </div>
        </aside>
    </div>
</article>
@endsection
