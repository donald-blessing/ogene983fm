@props([
    'href' => null,
    'variant' => 'primary',
    'size' => 'md',
    'type' => 'button',
    'full' => false,
])

@php
    $base = 'inline-flex items-center justify-center gap-2 font-semibold whitespace-nowrap transition-colors duration-150 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-brand-text active:translate-y-px disabled:pointer-events-none disabled:opacity-50';

    $variants = [
        'primary' => 'bg-brand-strong text-white hover:bg-brand',
        'secondary' => 'border border-line bg-transparent text-paper hover:border-line-strong hover:bg-surface-2',
        'ghost' => 'text-muted hover:text-paper hover:bg-surface-2',
        'danger' => 'bg-brand-soft text-brand-text hover:bg-brand hover:text-paper',
    ];

    $sizes = [
        'sm' => 'h-9 rounded-xs px-3 text-[13px]',
        'md' => 'h-11 rounded-xs px-4 text-sm',
        'lg' => 'h-12 rounded-xs px-6 text-[15px]',
    ];

    $classes = trim(
        $base . ' ' . ($variants[$variant] ?? $variants['primary']) . ' ' . ($sizes[$size] ?? $sizes['md']) . ($full ? ' w-full' : '')
    );
@endphp

@if ($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</a>
@else
    <button type="{{ $type }}" {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</button>
@endif
