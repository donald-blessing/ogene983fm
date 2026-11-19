@props([
    'items' => [],
])

<nav aria-label="Breadcrumb">
    <ol class="flex flex-wrap items-center gap-2 text-[11px] font-semibold uppercase tracking-[0.12em] text-faint">
        <li>
            <a href="{{ route('home') }}" wire:navigate class="inline-flex min-h-6 items-center gap-1.5 transition-colors hover:text-paper">
                <x-ui.icon name="radio" :size="13" />
                Home
            </a>
        </li>

        @foreach ($items as $item)
            <li aria-hidden="true">
                <x-ui.icon name="chevron-right" :size="12" class="text-line" />
            </li>

            <li>
                @if (filled($item['href'] ?? null))
                    <a href="{{ $item['href'] }}" wire:navigate class="inline-flex min-h-6 items-center transition-colors hover:text-paper">{{ $item['label'] }}</a>
                @else
                    <span class="text-muted" aria-current="page">{{ $item['label'] }}</span>
                @endif
            </li>
        @endforeach
    </ol>
</nav>
