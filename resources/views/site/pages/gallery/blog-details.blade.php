@extends('layouts.site')

@section('title', $title . ' · Ogene 98.3 FM')

@php
    $helper = new \App\Helpers\Helper;
@endphp

@section('content')
<div class="border-b border-line bg-surface/20">
    <div class="container-page py-8 sm:py-10">
        <x-ui.breadcrumb :items="[
            ['label' => $breadcrumb['category'] ?? 'Gallery', 'href' => $breadcrumb['route'] ?? route('gallery.album.index')],
            ['label' => $breadcrumb['title'] ?? $blog->title],
        ]" />

        <div class="mt-7 max-w-[68ch]">
            <h1 class="text-[clamp(1.9rem,4.2vw,2.9rem)] font-bold leading-[1.05] tracking-[-0.03em] text-paper">
                {{ $blog->title }}
            </h1>

            <p class="mt-3 flex flex-wrap items-center gap-x-3 gap-y-1 text-[12px] uppercase tracking-[0.1em] text-faint">
                @if ($blog->category)
                    <span>{{ $blog->category->name }}</span>
                @endif

                @if ($blog->created_at)
                    <span class="h-3 w-px bg-line" aria-hidden="true"></span>
                    <span>{{ $blog->created_at->format('F j, Y') }}</span>
                @endif

                <span class="h-3 w-px bg-line" aria-hidden="true"></span>
                <span>{{ $blog->albumUploads->count() }} {{ \Illuminate\Support\Str::plural('item', $blog->albumUploads->count()) }}</span>
            </p>
        </div>
    </div>
</div>

<section class="container-page py-10 sm:py-12">
    @if ($blog->coverImage)
        <div class="overflow-hidden rounded-md border border-line bg-surface-2">
            <img src="{{ $blog->coverImage }}" alt="{{ $blog->title }}" class="max-h-[520px] w-full object-cover">
        </div>
    @endif

    @if (filled($blog->about))
        <div class="prose-ogene mt-8 max-w-[68ch] text-[16px] leading-[1.75] text-muted">
            {!! $blog->about !!}
        </div>
    @endif

    <div class="mt-10">
        <h2 class="text-[11px] font-semibold uppercase tracking-[0.14em] text-faint">In this album</h2>

        @if ($blog->albumUploads->isEmpty())
            <div class="mt-4">
                <x-ui.empty-state
                    icon="radio"
                    title="No photos in this album yet"
                    description="Uploads from this event or session will appear here."
                />
            </div>
        @else
            <div class="mt-4 grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ($blog->albumUploads as $item)
                    @php
                        $source = $item->item;
                        $poster = $item->cover_image;
                        $isVideo = $source && $helper->isVideo($source);
                        $isAudio = $source && $helper->isAudio($source);
                    @endphp

                    <figure class="surface overflow-hidden">
                        @if ($isVideo)
                            <video controls preload="none" class="aspect-[4/3] w-full bg-ink object-cover" @if ($poster) poster="{{ $poster }}" @endif>
                                <source src="{{ $source }}" type="video/mp4">
                                Your browser does not support HTML5 video.
                            </video>
                        @elseif ($isAudio)
                            <div class="flex aspect-[4/3] w-full items-center justify-center bg-surface-2 px-5">
                                <audio controls preload="none" class="w-full">
                                    <source src="{{ $source }}" type="audio/mpeg">
                                    Your browser does not support HTML5 audio.
                                </audio>
                            </div>
                        @elseif ($source)
                            <a href="{{ $source }}" target="_blank" rel="noopener noreferrer" class="group block">
                                <img
                                    src="{{ $source }}"
                                    alt="{{ $item->title }}"
                                    loading="lazy"
                                    class="aspect-[4/3] w-full object-cover transition-transform duration-500 ease-out group-hover:scale-[1.03]"
                                >
                            </a>
                        @endif

                        @if ($item->title || filled($item->about))
                            <figcaption class="p-4">
                                @if ($item->title)
                                    <p class="text-[14px] font-semibold text-paper">{{ $item->title }}</p>
                                @endif

                                @if (filled($item->about))
                                    <p class="mt-1 line-clamp-2 text-[13px] leading-relaxed text-muted">{{ strip_tags($item->about) }}</p>
                                @endif
                            </figcaption>
                        @endif
                    </figure>
                @endforeach
            </div>
        @endif
    </div>

    <footer class="mt-12 flex flex-col gap-6 border-t border-line pt-7 sm:flex-row sm:items-center sm:justify-between">
        @if (($blog->tags ?? collect())->isNotEmpty())
            <ul class="flex flex-wrap gap-1.5">
                @foreach ($blog->tags as $tag)
                    <li>
                        <a
                            href="{{ route('tag.show', ['tag' => $tag->slug]) }}"
                            class="inline-flex rounded-xs border border-line px-2 py-1 font-mono text-[10px] uppercase tracking-[0.08em] text-muted transition-colors hover:border-brand/50 hover:text-paper"
                        >
                            #{{ $tag->name }}
                        </a>
                    </li>
                @endforeach
            </ul>
        @endif

        <x-ui.button href="{{ route('gallery.album.index') }}" wire:navigate variant="secondary" size="sm">
            Back to gallery
        </x-ui.button>
    </footer>
</section>
@endsection
