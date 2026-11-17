@props([
    'href' => null,
    'image' => null,
    'imageAlt' => '',
    'title' => null,
    'eyebrow' => null,
    'meta' => null,
    'aspect' => 'video',
    'eager' => false,
])

@php
    $aspects = [
        'video' => 'aspect-[4/3]',
        'wide' => 'aspect-[16/9]',
        'square' => 'aspect-square',
        'portrait' => 'aspect-[4/5]',
    ];

    $tag = $href ? 'a' : 'div';
@endphp

<{{ $tag }} @if ($href) href="{{ $href }}" @endif {{ $attributes->merge(['class' => 'group flex flex-col gap-3.5']) }}>
    <div class="relative overflow-hidden rounded-xs border border-line bg-surface-2 transition-colors duration-200 group-hover:border-[#4a3f39] {{ $aspects[$aspect] ?? $aspects['video'] }}">
        @if ($image)
            <img
                src="{{ $image }}"
                alt="{{ $imageAlt }}"
                loading="{{ $eager ? 'eager' : 'lazy' }}"
                class="h-full w-full object-cover transition-transform duration-500 ease-out group-hover:scale-[1.02]"
            >
        @else
            <div class="flex h-full w-full flex-col items-center justify-center gap-2.5 text-faint">
                <x-ui.icon name="radio" :size="26" />
                <span class="font-mono text-[8px] uppercase tracking-[0.2em]">Ogene 98.3</span>
            </div>
        @endif

        @isset($badge)
            <div class="absolute left-2.5 top-2.5">{{ $badge }}</div>
        @endisset
    </div>

    <div class="min-w-0 border-t border-line pt-3.5">
        @if ($eyebrow)
            <p class="mb-2 flex items-center gap-2 font-mono text-[10px] uppercase tracking-[0.14em] text-brand-text">
                <span class="h-1.5 w-1.5 bg-brand"></span>
                {{ $eyebrow }}
            </p>
        @endif

        @if ($title)
            <h3 class="text-[17px] font-semibold leading-snug tracking-[-0.01em] text-paper transition-colors group-hover:text-brand-text">
                {{ $title }}
            </h3>
        @endif

        {{ $slot }}

        @if ($meta)
            <p class="mt-2 font-mono text-[10px] uppercase tracking-[0.1em] text-faint">{{ $meta }}</p>
        @endif
    </div>
</{{ $tag }}>
