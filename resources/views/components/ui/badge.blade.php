@props([
    'variant' => 'neutral',
    'dot' => false,
])

@php
    $variants = [
        'neutral' => 'border border-line bg-transparent text-muted',
        'brand' => 'bg-brand-strong text-white',
        'live' => 'bg-brand-strong text-white',
        'outline' => 'border border-brand/50 bg-transparent text-brand-text',
    ];
@endphp

<span {{ $attributes->merge(['class' => 'inline-flex items-center gap-1.5 rounded-xs px-2 py-1 font-mono text-[11px] font-medium uppercase tracking-[0.12em] ' . ($variants[$variant] ?? $variants['neutral'])]) }}>
    @if ($dot)
        <span class="h-1 w-1 bg-current"></span>
    @endif
    {{ $slot }}
</span>
