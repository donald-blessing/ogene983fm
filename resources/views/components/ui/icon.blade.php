@props([
    'name',
    'size' => 20,
    'stroke' => 1.7,
])

@php
    // Heroicons (MIT) — curated subset. Solid glyphs use fill, the rest stroke.
    $solid = [
        'play' => '<path d="M6.3 2.84A1.5 1.5 0 0 0 4 4.11v15.78a1.5 1.5 0 0 0 2.3 1.27l13.45-7.89a1.5 1.5 0 0 0 0-2.54L6.3 2.84Z"/>',
        'pause' => '<path d="M6.75 5.25a.75.75 0 0 0-.75.75v12c0 .414.336.75.75.75h2.5a.75.75 0 0 0 .75-.75V6a.75.75 0 0 0-.75-.75h-2.5ZM14.75 5.25a.75.75 0 0 0-.75.75v12c0 .414.336.75.75.75h2.5a.75.75 0 0 0 .75-.75V6a.75.75 0 0 0-.75-.75h-2.5Z"/>',
        'stop' => '<path fill-rule="evenodd" d="M4.5 6.75A2.25 2.25 0 0 1 6.75 4.5h10.5a2.25 2.25 0 0 1 2.25 2.25v10.5a2.25 2.25 0 0 1-2.25 2.25H6.75A2.25 2.25 0 0 1 4.5 17.25V6.75Z" clip-rule="evenodd"/>',
    ];

    $outline = [
        'search' => '<path stroke-linecap="round" stroke-linejoin="round" d="m21 21-4.35-4.35M17 10.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0Z"/>',
        'menu' => '<path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5M3.75 17.25h16.5"/>',
        'x' => '<path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12"/>',
        'chevron-down' => '<path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5"/>',
        'chevron-right' => '<path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5"/>',
        'arrow-right' => '<path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/>',
        'arrow-up-right' => '<path stroke-linecap="round" stroke-linejoin="round" d="M4.5 19.5 19.5 4.5m0 0H8.25m11.25 0v11.25"/>',
        'calendar' => '<path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5"/>',
        'clock' => '<path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>',
        'radio' => '<path stroke-linecap="round" stroke-linejoin="round" d="m3.75 7.5 16.5-3.75M4.5 7.5h15A1.5 1.5 0 0 1 21 9v9a1.5 1.5 0 0 1-1.5 1.5h-15A1.5 1.5 0 0 1 3 18V9a1.5 1.5 0 0 1 1.5-1.5Zm3 6h3m-3 3h1.5"/><circle cx="15.75" cy="13.5" r="1.5"/>',
        'volume' => '<path stroke-linecap="round" stroke-linejoin="round" d="M19.114 5.636a9 9 0 0 1 0 12.728M16.463 8.288a5.25 5.25 0 0 1 0 7.424M6.75 8.25l4.72-4.72a.75.75 0 0 1 1.28.53v15.88a.75.75 0 0 1-1.28.53l-4.72-4.72H4.51c-.88 0-1.704-.507-1.938-1.354A9.009 9.009 0 0 1 2.25 12c0-.83.112-1.633.322-2.396C2.806 8.756 3.63 8.25 4.51 8.25H6.75Z"/>',
        'volume-off' => '<path stroke-linecap="round" stroke-linejoin="round" d="M17.25 9.75 19.5 12m0 0 2.25 2.25M19.5 12l2.25-2.25M19.5 12l-2.25 2.25m-10.5-6 4.72-4.72a.75.75 0 0 1 1.28.53v15.88a.75.75 0 0 1-1.28.53l-4.72-4.72H4.51c-.88 0-1.704-.507-1.938-1.354A9.009 9.009 0 0 1 2.25 12c0-.83.112-1.633.322-2.396C2.806 8.756 3.63 8.25 4.51 8.25H6.75Z"/>',
        'user' => '<path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z"/>',
        'mail' => '<path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75"/>',
        'share' => '<path stroke-linecap="round" stroke-linejoin="round" d="M7.217 10.907a2.25 2.25 0 1 0 0 2.186m0-2.186c.18.324.283.696.283 1.093s-.103.77-.283 1.093m0-2.186 9.566-5.314m-9.566 7.5 9.566 5.314m0 0a2.25 2.25 0 1 0 3.935 2.186 2.25 2.25 0 0 0-3.935-2.186Zm0-12.814a2.25 2.25 0 1 0 3.933-2.185 2.25 2.25 0 0 0-3.933 2.185Z"/>',
        'headphones' => '<path stroke-linecap="round" stroke-linejoin="round" d="M3 13.5v3a2.25 2.25 0 0 0 2.25 2.25H6a1.5 1.5 0 0 0 1.5-1.5v-3.75A1.5 1.5 0 0 0 6 12H4.5V9.75a7.5 7.5 0 0 1 15 0v2.25H18a1.5 1.5 0 0 0-1.5 1.5v3.75A1.5 1.5 0 0 0 18 18.75h.75A2.25 2.25 0 0 0 21 16.5v-3"/>',
        'microphone' => '<path stroke-linecap="round" stroke-linejoin="round" d="M12 18.75a6 6 0 0 0 6-6v-1.5m-6 7.5v3m0-3a6 6 0 0 1-6-6v-1.5m6 7.5v3m4.5-10.5a4.5 4.5 0 1 0-9 0v4.5a4.5 4.5 0 1 0 9 0v-4.5Z"/>',
        'external' => '<path stroke-linecap="round" stroke-linejoin="round" d="M13.5 6H5.25A2.25 2.25 0 0 0 3 8.25v10.5A2.25 2.25 0 0 0 5.25 21h10.5A2.25 2.25 0 0 0 18 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25"/>',
        'check' => '<path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5"/>',
        'spinner' => '<path stroke-linecap="round" d="M12 3a9 9 0 1 0 9 9"/>',
    ];
@endphp

<svg
    {{ $attributes->merge(['class' => 'shrink-0']) }}
    xmlns="http://www.w3.org/2000/svg"
    viewBox="0 0 24 24"
    width="{{ $size }}"
    height="{{ $size }}"
    @if (isset($solid[$name])) fill="currentColor" aria-hidden="true" @else fill="none" stroke="currentColor" stroke-width="{{ $stroke }}" aria-hidden="true" @endif
>
    {!! $solid[$name] ?? $outline[$name] ?? '' !!}
</svg>
