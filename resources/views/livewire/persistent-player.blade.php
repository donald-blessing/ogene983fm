<div
    class="fixed inset-x-0 bottom-[calc(var(--tabbar-h)+env(safe-area-inset-bottom))] z-[95] border-t border-line bg-surface lg:bottom-0"
    x-data="{
        playing: false,
        buffering: false,
        volume: 0.8,
        audio: null,
        error: false,
        init() {
            this.audio = new Audio('{{ $streamUrl }}');
            this.audio.volume = this.volume;
            this.audio.preload = 'none';

            this.audio.addEventListener('waiting', () => { this.buffering = true; });
            this.audio.addEventListener('playing', () => {
                this.buffering = false;
                this.playing = true;
                this.error = false;
            });
            this.audio.addEventListener('pause', () => {
                this.playing = false;
                this.buffering = false;
            });
            this.audio.addEventListener('error', () => {
                this.error = true;
                this.playing = false;
                this.buffering = false;
            });
        },
        toggle() {
            if (this.playing || this.buffering) {
                this.audio.pause();
                this.playing = false;
                this.buffering = false;
                return;
            }

            this.error = false;
            this.buffering = true;
            this.audio.load();
            this.audio.play().catch(() => {
                this.error = true;
                this.buffering = false;
            });
        }
    }"
    x-on:toggle-player.window="toggle()"
>
    <div class="container-page">
        <div class="flex h-[var(--player-h)] items-center gap-3 sm:gap-5">
            {{-- Artwork --}}
            <div class="relative hidden shrink-0 sm:block">
                @if ($currentCover || ($currentProgramme['coverImage'] ?? null))
                    <img
                        src="{{ $currentCover ?: $currentProgramme['coverImage'] }}"
                        alt=""
                        class="h-12 w-12 rounded-xs border border-line object-cover"
                    >
                @else
                    <div class="flex h-12 w-12 items-center justify-center rounded-xs border border-line bg-surface-2 text-brand-text">
                        <x-ui.icon name="radio" :size="20" />
                    </div>
                @endif
                <span class="absolute -bottom-1 -right-1 flex h-3 w-3 items-center justify-center border border-surface bg-brand" aria-hidden="true">
                    <span class="h-1 w-1 bg-paper"></span>
                </span>
            </div>

            {{-- Play --}}
            <button
                type="button"
                x-on:click="toggle()"
                class="flex h-11 w-11 shrink-0 items-center justify-center rounded-xs bg-brand-strong text-white transition-colors hover:bg-brand focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-brand-text active:scale-95"
                x-bind:aria-label="error ? 'Retry the live stream' : (playing ? 'Pause the live stream' : 'Play the live stream')"
            >
                <template x-if="error">
                    <x-ui.icon name="radio" :size="19" />
                </template>
                <template x-if="!error && buffering">
                    <x-ui.icon name="spinner" :size="19" class="animate-spin" />
                </template>
                <template x-if="!error && !buffering && playing">
                    <x-ui.icon name="pause" :size="19" />
                </template>
                <template x-if="!error && !buffering && !playing">
                    <x-ui.icon name="play" :size="19" class="translate-x-px" />
                </template>
            </button>

            {{-- Now playing --}}
            <div class="min-w-0 flex-1">
                <p class="flex items-center gap-2 font-mono text-[10px] font-medium uppercase tracking-[0.14em]">
                    <span class="equalizer text-brand" x-show="playing && !buffering" x-cloak aria-hidden="true"><span></span><span></span><span></span><span></span></span>
                    <span class="text-brand-text" x-show="buffering" x-cloak>Connecting…</span>
                    <span class="text-brand-text" x-show="!playing && !buffering && !error" x-cloak>Live · 98.3 FM</span>
                    <span class="text-brand-text" x-show="playing && !buffering" x-cloak>Live now</span>
                    <span class="text-faint" x-show="error" x-cloak>Stream offline</span>

                    <button
                        type="button"
                        x-show="error"
                        x-cloak
                        x-on:click="toggle()"
                        class="normal-case tracking-normal text-[11px] font-semibold text-brand-text underline decoration-brand-text/40 underline-offset-2 transition-colors hover:decoration-brand-text"
                    >
                        Retry
                    </button>
                </p>

                <p class="sr-only" role="status" aria-live="polite" x-text="error ? 'The live stream is offline.' : (buffering ? 'Connecting to the live stream.' : (playing ? 'Playing the live stream.' : 'The live stream is paused.'))"></p>

                <p class="mt-0.5 truncate text-[15px] font-semibold leading-tight text-paper">
                    {{ $currentSong ?: ($currentProgramme['title'] ?? 'Ogene 98.3 FM') }}
                </p>

                <p class="mt-0.5 truncate text-[12px] text-faint">
                    @if ($currentSong && $currentProgramme)
                        {{ $currentProgramme['title'] }}
                    @else
                        The voice of the East
                    @endif
                </p>
            </div>

            {{-- Volume --}}
            <div class="hidden items-center gap-2.5 md:flex">
                <button
                    type="button"
                    x-on:click="volume = volume > 0 ? 0 : 0.8; audio.volume = volume"
                    class="flex h-8 w-8 items-center justify-center rounded-sm text-faint transition-colors hover:text-paper"
                    x-bind:aria-label="volume > 0 ? 'Mute' : 'Unmute'"
                >
                    <x-ui.icon name="volume" :size="17" x-show="volume > 0" />
                    <x-ui.icon name="volume-off" :size="17" x-show="volume <= 0" />
                </button>
                <input
                    type="range"
                    class="range w-28"
                    min="0"
                    max="1"
                    step="0.01"
                    x-model="volume"
                    x-on:input="audio.volume = $event.target.value"
                    aria-label="Volume"
                >
            </div>

            {{-- Station --}}
            <a href="{{ route('listen') }}" wire:navigate class="hidden min-h-6 shrink-0 items-center gap-3 border-l border-line pl-5 lg:flex">
                <span class="h-2 w-2 bg-brand" aria-hidden="true"></span>
                <span class="font-display text-xl leading-none tracking-[-0.03em] text-paper">98.3<span class="ml-1 text-[11px] font-semibold uppercase tracking-[0.12em] text-faint">FM</span></span>
            </a>
        </div>
    </div>
</div>
