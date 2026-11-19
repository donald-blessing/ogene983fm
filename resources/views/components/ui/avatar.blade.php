@props([
    'src' => null,
    'name' => '',
    'size' => 'md',
    'href' => null,
    'ring' => false,
])

@php
    $sizes = [
        'xs' => 'h-7 w-7 text-[11px]',
        'sm' => 'h-9 w-9 text-xs',
        'md' => 'h-11 w-11 text-sm',
        'lg' => 'h-14 w-14 text-base',
        'xl' => 'h-20 w-20 text-lg',
        '2xl' => 'h-28 w-28 text-2xl',
    ];

    $initials = collect(explode(' ', trim($name)))
        ->filter()
        ->take(2)
        ->map(fn ($part) => mb_strtoupper(mb_substr($part, 0, 1)))
        ->implode('');

    $classes = 'inline-flex shrink-0 items-center justify-center overflow-hidden rounded-xs bg-surface-2 font-semibold text-paper ' .
        ($sizes[$size] ?? $sizes['md']) .
        ($ring ? ' ring-2 ring-brand/60 ring-offset-2 ring-offset-ink' : ' border border-line');
@endphp

@if ($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
@else
    <span {{ $attributes->merge(['class' => $classes]) }}>
@endif
        @if ($src)
            <img src="{{ $src }}" alt="{{ $name }}" loading="lazy" class="h-full w-full object-cover">
        @else
            {{ $initials ?: '•' }}
        @endif
@if ($href)
    </a>
@else
    </span>
@endif
