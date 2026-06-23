<div class="persistent-player-container fixed bottom-0 left-0 right-0 z-[9999]" 
     x-data="{ 
        playing: false, 
        buffering: false,
        volume: 0.8,
        audio: null,
        error: false,
        init() {
            this.audio = new Audio('{{ $streamUrl }}');
            this.audio.volume = this.volume;
            
            this.audio.addEventListener('waiting', () => {
                this.buffering = true;
            });
            
            this.audio.addEventListener('playing', () => {
                this.buffering = false;
                this.playing = true;
            });

            this.audio.addEventListener('error', () => {
                this.error = true;
                this.playing = false;
                this.buffering = false;
            });
        },
        toggle() {
            if (this.playing) {
                this.audio.pause();
                this.playing = false;
                this.buffering = false;
            } else {
                this.error = false;
                this.buffering = true;
                this.audio.load();
                this.audio.play();
            }
        }
     }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between gap-4 md:gap-12">
            <!-- Play Control & Song Info -->
            <div class="flex items-center gap-4 flex-1 min-w-0">
                <div class="relative shrink-0 hidden sm:block">
                    <img 
                        src="{{ $currentCover ?: ($currentProgramme['coverImage'] ?? asset('images/logo.png')) }}" 
                        alt="Album Art" 
                        class="w-14 h-14 rounded-xl object-cover shadow-2xl border border-white/5"
                    >
                    <div class="absolute inset-0 rounded-xl shadow-inner pointer-events-none"></div>
                </div>
                
                <button 
                    class="btn-circle btn-lg shrink-0 transition-all active:scale-90" 
                    :class="error ? 'bg-red-600' : 'bg-primary text-white shadow-lg shadow-primary/30 hover:shadow-primary/50'"
                    @click="toggle()" 
                    :disabled="error"
                    aria-label="Play or pause radio stream"
                >
                    <i class="fa" :class="error ? 'fa-exclamation-triangle' : (buffering ? 'fa-spinner fa-spin' : (playing ? 'fa-pause' : 'fa-play'))"></i>
                </button>

                <div class="min-w-0">
                    <h6 class="text-base md:text-lg font-display text-white truncate leading-tight mb-1">
                        {{ $currentSong ?: ($currentProgramme['title'] ?? 'Ogene 98.3 FM') }}
                    </h6>
                    <div class="flex items-center gap-3">
                        <!-- CSS Visualizer -->
                        <div class="audio-visualizer" x-show="playing && !buffering">
                            <span></span><span></span><span></span><span></span>
                        </div>
                        <span class="flex h-1.5 w-1.5 rounded-full bg-accent animate-pulse" x-show="buffering"></span>
                        
                        <small class="text-white/40 font-bold uppercase text-[10px] tracking-widest" x-show="!error" x-text="buffering ? 'Buffering...' : 'Live Now'"></small>
                        <small class="text-red-500 font-bold uppercase text-[10px] tracking-widest" x-show="error">Stream Offline</small>
                    </div>
                </div>
            </div>

            <!-- Volume Control -->
            <div class="hidden md:flex items-center gap-3 w-48 shrink-0">
                <i class="fa fa-volume-down text-white/20 text-xs"></i>
                <input type="range" class="custom-range" min="0" max="1" step="0.01" x-model="volume" @input="audio.volume = volume">
                <i class="fa fa-volume-up text-white/20 text-xs"></i>
            </div>

            <!-- FM Info -->
            <div class="hidden lg:flex flex-col items-end gap-0.5 shrink-0 border-l border-white/5 pl-8">
                <div class="flex items-center gap-2">
                    <span class="px-1.5 py-0.5 bg-red-600 text-white text-[9px] font-black rounded uppercase">Live</span>
                    <span class="text-secondary font-display text-2xl tracking-tighter leading-none">98.3 <small class="text-sm">FM</small></span>
                </div>
                <small class="text-white/20 font-black text-[9px] uppercase tracking-[0.15em] leading-none">{{ app(\App\Settings\GeneralSettings::class)->site_motto }}</small>
            </div>
        </div>
    </div>
</div>
