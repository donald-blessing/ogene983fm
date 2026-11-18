@php
    $flashes = collect([
        'success' => session('success'),
        'error' => session('error'),
    ])->filter(fn ($message): bool => filled($message));
@endphp

@if ($flashes->isNotEmpty())
    <div class="container-page pt-4" role="status" aria-live="polite" aria-atomic="true">
        @foreach ($flashes as $type => $message)
            <div class="flex items-start gap-3 border-l-2 border-brand {{ $type === 'error' ? 'bg-brand-soft/60' : 'bg-surface-2' }} px-4 py-3">
                <x-ui.icon :name="$type === 'error' ? 'x' : 'check'" :size="15" class="mt-0.5 text-brand-text" />

                <p class="text-[13px] leading-relaxed text-paper">{{ $message }}</p>
            </div>
        @endforeach
    </div>
@endif
