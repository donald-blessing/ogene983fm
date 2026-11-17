@extends('layouts.site')

@section('title', 'Schedule · Ogene 98.3 FM')

@section('content')
@php
    $days = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];

    $today = now()->englishDayOfWeek;
    $nowTime = (int) strtotime(now()->toTimeString());

    $toSeconds = fn ($time): int => $time ? (int) strtotime((string) $time) : 0;
    $formatTime = fn ($time): string => $time ? date('g:i A', $toSeconds($time)) : '';

    $timesFor = fn ($programme, string $day) => $programme->programmeTimes
        ->filter(fn ($time) => strtolower($time->day) === strtolower($day))
        ->sortBy('from')
        ->values();

    $isLive = fn ($programme): bool => $timesFor($programme, $today)
        ->contains(fn ($time) => $toSeconds($time->from) <= $nowTime && $toSeconds($time->to) > $nowTime);

    $slots = collect($days)->mapWithKeys(fn (string $day) => [
        $day => $programmes
            ->filter(fn ($programme) => $timesFor($programme, $day)->isNotEmpty())
            ->sortBy(fn ($programme) => $timesFor($programme, $day)->first()?->from)
            ->values(),
    ]);
@endphp

<div class="border-b border-line bg-surface/20">
    <div class="container-page py-8 sm:py-10">
        <x-ui.breadcrumb :items="[['label' => 'Schedule']]" />

        <div class="mt-7 flex flex-wrap items-end justify-between gap-6">
            <div>
                <p class="label-mono mb-3 text-brand-text">Schedule · WAT</p>
                <h1 class="text-[clamp(2rem,4.6vw,3.25rem)] font-bold leading-[1.02] tracking-[-0.03em] text-paper">
                    Programme schedule
                </h1>
                <p class="mt-3 max-w-[54ch] text-[15px] leading-relaxed text-muted">
                    Seven days of highlife, talk and news. All times are West Africa Time (WAT).
                </p>
            </div>

            <x-ui.badge variant="outline" dot>Today is {{ $today }}</x-ui.badge>
        </div>

        {{-- Day jump links --}}
        <nav aria-label="Jump to day" class="mt-7 -mx-1 flex gap-1 overflow-x-auto pb-1">
            @foreach ($days as $day)
                <a
                    href="#day-{{ strtolower($day) }}"
                    class="shrink-0 rounded-xs border px-3 py-1.5 font-mono text-[10px] uppercase tracking-[0.12em] transition-colors {{ $day === $today ? 'border-brand/50 bg-brand-soft text-brand-text' : 'border-line text-muted hover:border-[#4a3f39] hover:text-paper' }}"
                >
                    {{ $day === $today ? 'Today' : substr($day, 0, 3) }}
                </a>
            @endforeach
        </nav>
    </div>
</div>

<section class="container-page py-12 sm:py-14">
    @if ($programmes->isEmpty())
        <x-ui.empty-state
            icon="calendar"
            title="The schedule is being finalised"
            description="Programme times are published ahead of each broadcast week. In the meantime, the live stream runs around the clock."
        >
            <x-slot:action>
                <x-ui.button href="{{ route('listen') }}" wire:navigate>
                    <x-ui.icon name="play" :size="15" />
                    Listen live
                </x-ui.button>
            </x-slot:action>
        </x-ui.empty-state>
    @else
        <div class="space-y-12">
            @foreach ($slots as $day => $dayProgrammes)
                @continue($dayProgrammes->isEmpty())

                <section id="day-{{ strtolower($day) }}" class="scroll-mt-24">
                    <div class="flex items-center gap-3">
                        <h2 class="text-xl font-semibold tracking-[-0.01em] text-paper">{{ $day }}</h2>

                        @if ($day === $today)
                            <x-ui.badge variant="brand" dot>Today</x-ui.badge>
                        @endif

                        <span class="h-px flex-1 bg-line"></span>
                        <span class="text-[12px] tabular-nums text-faint">
                            {{ $dayProgrammes->count() }} {{ \Illuminate\Support\Str::plural('show', $dayProgrammes->count()) }}
                        </span>
                    </div>

                    <ol class="mt-4 divide-y divide-line overflow-hidden rounded-lg border border-line bg-surface/40">
                        @foreach ($dayProgrammes as $programme)
                            @php
                                $slot = $timesFor($programme, $day);
                                $live = $day === $today && $isLive($programme);
                            @endphp

                            <li>
                                <a
                                    href="{{ route('programme.show', ['programme' => $programme->slug]) }}"
                                    wire:navigate
                                    class="group flex items-center gap-4 px-4 py-4 transition-colors hover:bg-surface-2/60 sm:px-5 {{ $live ? 'bg-brand-soft/40' : '' }}"
                                >
                                    <span class="w-[104px] shrink-0 text-[12px] font-semibold tabular-nums leading-snug {{ $live ? 'text-brand-text' : 'text-faint' }}">
                                        {{ $formatTime($slot->first()?->from) }}
                                        <span class="block text-[11px] font-normal text-faint">to {{ $formatTime($slot->first()?->to) }}</span>
                                    </span>

                                    <span class="hidden h-9 w-px shrink-0 bg-line sm:block"></span>

                                    <span class="min-w-0 flex-1">
                                        <span class="flex flex-wrap items-center gap-2">
                                            <span class="truncate text-[15px] font-semibold text-paper transition-colors group-hover:text-brand-text">
                                                {{ $programme->title }}
                                            </span>

                                            @if ($live)
                                                <x-ui.badge variant="brand" dot>On air</x-ui.badge>
                                            @endif
                                        </span>

                                        @if ($programme->presenters->isNotEmpty())
                                            <span class="mt-0.5 block truncate text-[12px] text-faint">
                                                with {{ $programme->presenters->pluck('name')->join(', ') }}
                                            </span>
                                        @endif
                                    </span>

                                    <x-ui.icon name="chevron-right" :size="16" class="shrink-0 text-faint transition-transform duration-200 group-hover:translate-x-0.5 group-hover:text-paper" />
                                </a>
                            </li>
                        @endforeach
                    </ol>
                </section>
            @endforeach
        </div>
    @endif
</section>
@endsection
