@props([
    'frequency' => 98.3,
    'min' => 88,
    'max' => 108,
])

@php
    $range = max(1, $max - $min);
    $position = max(0, min(100, (($frequency - $min) / $range) * 100));
@endphp

<div {{ $attributes->merge(['class' => 'w-full']) }} role="img" aria-label="Tuned to {{ number_format($frequency, 1) }} FM">
    <div class="flex items-center justify-between font-mono text-[9px] uppercase tracking-[0.12em] text-faint" aria-hidden="true">
        @foreach ([88, 92, 96, 100, 104, 108] as $mark)
            <span>{{ $mark }}</span>
        @endforeach
    </div>

    <div class="relative mt-1.5" aria-hidden="true">
        <div class="dial-scale h-6 sm:h-7"></div>

        <span class="absolute -top-1 bottom-0 w-px -translate-x-1/2 bg-brand" style="left: {{ $position }}%"></span>
        <span class="absolute -top-1 h-1.5 w-1.5 -translate-x-1/2 bg-brand" style="left: {{ $position }}%"></span>
    </div>

    <div class="mt-1.5 flex items-center justify-between font-mono text-[9px] uppercase tracking-[0.16em] text-faint" aria-hidden="true">
        <span>FM</span>
        <span class="text-paper">{{ number_format($frequency, 1) }}</span>
        <span>MHz</span>
    </div>
</div>
