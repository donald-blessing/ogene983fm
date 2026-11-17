@props([
    'href' => null,
    'padding' => 'md',
    'interactive' => false,
])

@php
    $paddings = [
        'none' => '',
        'sm' => 'p-4',
        'md' => 'p-5 sm:p-6',
        'lg' => 'p-6 sm:p-8 lg:p-10',
    ];

    $classes = trim(
        'surface ' .
            ($paddings[$padding] ?? $paddings['md']) .
            ($interactive ? ' surface-interactive block' : '')
    );
@endphp

@if ($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</a>
@else
    <div {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</div>
@endif
