@extends('layouts.site')

@section('title', $title . ' · Ogene 98.3 FM')

@section('content')
@php
    $routeName = \Illuminate\Support\Facades\Route::currentRouteName();
    $isSearch = $routeName === 'search';
    $isGallery = $routeName === 'gallery.album.index';
    $count = method_exists($blogs, 'total') ? $blogs->total() : $blogs->count();

    $noun = $isGallery ? 'album' : 'story';
    $countLabel = $count . ' ' . \Illuminate\Support\Str::plural($noun, $count);

    $hrefFor = function ($blog, int $index) use ($routes): string {
        $route = $routes[$index] ?? null;

        if (filled($route)) {
            return $route;
        }

        return data_get($blog, 'url') ?: route('post.index');
    };
@endphp

<div class="border-b border-line bg-surface/20">
    <div class="container-page py-8 sm:py-10">
        <x-ui.breadcrumb :items="[['label' => $title]]" />

        <div class="mt-7 flex flex-wrap items-end justify-between gap-4">
            <div>
                <h1 class="text-[clamp(1.9rem,4.2vw,2.9rem)] font-bold leading-[1.05] tracking-[-0.03em] text-paper">
                    {{ $title }}
                </h1>

                <p class="mt-2 text-[13px] text-faint">
                    {{ $countLabel }}
                </p>
            </div>

            @if ($isSearch)
                <x-ui.button href="{{ route('post.index') }}" wire:navigate variant="secondary" size="sm">
                    Clear search
                </x-ui.button>
            @endif
        </div>
    </div>
</div>

<section class="container-page py-12 sm:py-14">
    @livewire('sponsorship-banner')

    <div class="grid gap-12 lg:grid-cols-12 lg:gap-10">
        {{-- Sidebar --}}
        <aside class="order-2 flex flex-col gap-6 lg:order-1 lg:col-span-3">
            <form action="{{ route('search') }}" method="GET" role="search">
                <label for="news-search" class="sr-only">Search the site</label>

                <div class="flex items-center gap-1.5 rounded-sm border border-line bg-surface p-1.5 transition-colors focus-within:border-brand/60">
                    <x-ui.icon name="search" :size="16" class="ml-1.5 shrink-0 text-faint" />
                    <input
                        id="news-search"
                        name="search"
                        type="search"
                        value="{{ request('search') }}"
                        placeholder="Search"
                        class="h-8 min-w-0 flex-1 bg-transparent px-1 text-sm text-paper placeholder:text-faint focus:outline-none"
                    >
                </div>
            </form>

            @if ($categories->isNotEmpty())
                <div class="surface overflow-hidden">
                    <h2 class="border-b border-line px-4 py-3 text-[11px] font-semibold uppercase tracking-[0.14em] text-faint">Topics</h2>

                    <ul class="divide-y divide-line">
                        @foreach ($categories as $category)
                            <li>
                                <a
                                    href="{{ route('post.category', ['category' => $category->slug]) }}"
                                    wire:navigate
                                    class="flex items-center justify-between gap-2 px-4 py-2.5 text-[13px] text-muted transition-colors hover:bg-surface-2/60 hover:text-paper"
                                >
                                    <span class="truncate">{{ $category->name }}</span>
                                    <x-ui.icon name="chevron-right" :size="13" class="shrink-0 text-faint" />
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (! $isGallery && $recents->isNotEmpty())
                <div class="surface overflow-hidden">
                    <h2 class="border-b border-line px-4 py-3 text-[11px] font-semibold uppercase tracking-[0.14em] text-faint">Latest</h2>

                    <ul class="divide-y divide-line">
                        @foreach ($recents as $recent)
                            <li>
                                <a
                                    href="{{ route('post.show', ['category' => $recent->category->slug, 'post' => $recent->slug]) }}"
                                    wire:navigate
                                    class="group flex items-start gap-3 px-4 py-3 transition-colors hover:bg-surface-2/60"
                                >
                                    <span class="h-11 w-11 shrink-0 overflow-hidden rounded-xs border border-line bg-surface-2">
                                        @if ($recent->coverImage)
                                            <img src="{{ $recent->coverImage }}" alt="" loading="lazy" class="h-full w-full object-cover">
                                        @endif
                                    </span>

                                    <span class="min-w-0">
                                        <span class="line-clamp-2 block text-[13px] font-medium leading-snug text-paper transition-colors group-hover:text-brand-text">{{ $recent->title }}</span>
                                        <span class="mt-1 block text-[11px] text-faint">{{ $recent->created_at?->format('M j, Y') }}</span>
                                    </span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if ($tags->isNotEmpty())
                <div class="surface p-4">
                    <h2 class="text-[11px] font-semibold uppercase tracking-[0.14em] text-faint">Tags</h2>

                    <div class="mt-3 flex flex-wrap gap-1.5">
                        @foreach ($tags as $tag)
                            <a
                                href="{{ route('tag.show', ['tag' => $tag->slug]) }}"
                                class="rounded-xs border border-line px-2 py-1 font-mono text-[11px] uppercase tracking-[0.08em] text-muted transition-colors hover:border-brand/50 hover:text-paper"
                            >
                                {{ $tag->name }}
                            </a>
                        @endforeach
                    </div>
                </div>
            @endif
        </aside>

        {{-- Results --}}
        <div class="order-1 lg:order-2 lg:col-span-9">
            @if ($blogs->isEmpty())
                <x-ui.empty-state
                    icon="{{ $isSearch ? 'search' : ($isGallery ? 'radio' : 'newspaper') }}"
                    :title="$isSearch
                        ? 'No matches for that search'
                        : ($isGallery ? 'No albums published yet' : 'Nothing published here yet')"
                    :description="$isSearch
                        ? 'Try a different word, or check the spelling of a show or presenter name.'
                        : ($isGallery
                            ? 'Photos and video from studio sessions and station events will appear here.'
                            : 'Stories will appear here as soon as the newsroom publishes them.')"
                >
                    <x-slot:action>
                        @if ($isSearch)
                            <x-ui.button href="{{ route('post.index') }}" wire:navigate variant="secondary" size="sm">Browse all stories</x-ui.button>
                        @else
                            <x-ui.button href="{{ route('listen') }}" wire:navigate variant="secondary" size="sm">Listen live instead</x-ui.button>
                        @endif
                    </x-slot:action>
                </x-ui.empty-state>
            @else
                <div class="grid gap-x-6 gap-y-9 sm:grid-cols-2 xl:grid-cols-3">
                    @foreach ($blogs as $blog)
                        @php
                            $href = $hrefFor($blog, $loop->index);
                            $itemTitle = data_get($blog, 'title') ?: data_get($blog, 'name') ?: 'Untitled';
                            $image = data_get($blog, 'coverImage');
                            $eyebrow = data_get($blog, 'category.name');
                            $date = data_get($blog, 'created_at');
                            $comments = data_get($blog, 'comments_count');
                        @endphp

                        <x-ui.media-card
                            :href="$href"
                            :image="$image"
                            :image-alt="$itemTitle"
                            :title="$itemTitle"
                            :eyebrow="$eyebrow"
                            :meta="collect([
                                $date ? \Illuminate\Support\Carbon::parse($date)->format('M j, Y') : null,
                                $comments ? $comments . ' ' . \Illuminate\Support\Str::plural('comment', $comments) : null,
                            ])->filter()->implode(' · ')"
                        />
                    @endforeach
                </div>

                @if (method_exists($blogs, 'hasPages') && $blogs->hasPages())
                    <div class="mt-12">
                        {{ $blogs->links() }}
                    </div>
                @endif
            @endif
        </div>
    </div>
</section>
@endsection
