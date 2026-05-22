<div class="persistent-player-container fixed bottom-0 left-0 right-0 z-[9999]" 
     x-data="{ 
        playing: false, 
        volume: 0.8,
        audio: null,
        error: false,
        init() {
            this.audio = new Audio('{{ $streamUrl }}');
            this.audio.volume = this.volume;
            
            this.audio.addEventListener('error', () => {
                this.error = true;
                this.playing = false;
            });
        },
        toggle() {
            if (this.playing) {
                this.audio.pause();
                this.playing = false;
            } else {
                this.error = false;
                this.audio.load();
                this.audio.play();
                this.playing = true;
            }
        }
     }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between gap-6">
            <!-- Play Control -->
            <div class="flex items-center gap-4 flex-1 min-w-0">
                <button 
                    class="btn-circle btn-lg shrink-0" 
                    :class="error ? 'bg-red-500' : 'bg-primary text-white shadow-[0_0_20px_rgba(191,0,255,0.4)] hover:scale-105'"
                    @click="toggle()" 
                    :disabled="error"
                >
                    <i class="fa text-2xl" :class="error ? 'fa-exclamation-triangle' : (playing ? 'fa-pause' : 'fa-play')"></i>
                </button>
                <div class="truncate">
                    <h6 class="text-lg font-display text-white truncate leading-tight">
                        {{ $currentProgramme['title'] ?? 'Ogene 98.3 FM' }}
                    </h6>
                    <div class="flex items-center gap-2">
                        <span class="flex h-2 w-2 rounded-full bg-secondary animate-pulse" x-show="playing"></span>
                        <small class="text-white/60 font-medium tracking-wide uppercase text-xs" x-show="!error">Live Now</small>
                        <small class="text-red-400 font-bold uppercase text-xs" x-show="error">Stream Offline</small>
                    </div>
                </div>
            </div>

            <!-- Volume Control -->
            <div class="hidden md:flex items-center gap-4 w-64 shrink-0">
                <i class="fa fa-volume-down text-white/50"></i>
                <input type="range" class="custom-range" min="0" max="1" step="0.01" x-model="volume" @input="audio.volume = volume">
                <i class="fa fa-volume-up text-white/50"></i>
            </div>

            <!-- FM Info -->
            <div class="hidden lg:flex flex-col items-end gap-1 flex-1">
                <div class="flex items-center gap-2">
                    <span class="px-2 py-0.5 bg-red-600 text-white text-[10px] font-black rounded italic">LIVE</span>
                    <span class="text-secondary font-display text-xl tracking-tighter">98.3 FM</span>
                </div>
                <small class="text-white/40 font-semibold text-[10px] uppercase tracking-[0.2em]">Authentically Eastern</small>
            </div>
        </div>
    </div>
</div>
