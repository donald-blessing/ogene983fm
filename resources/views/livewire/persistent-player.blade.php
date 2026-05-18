<div class="persistent-player-container fixed-bottom bg-dark text-white p-3 shadow-lg" 
     style="z-index: 9999; border-top: 3px solid #dc3545;"
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
                this.audio.load(); // Reload stream to avoid lag from long pauses
                this.audio.play();
                this.playing = true;
            }
        }
     }">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-4 d-flex align-items-center">
                <button class="btn btn-danger btn-circle btn-lg mr-3" @click="toggle()" :disabled="error">
                    <i class="fa" :class="error ? 'fa-exclamation-triangle' : (playing ? 'fa-pause' : 'fa-play')"></i>
                </button>
                <div>
                    <h6 class="mb-0 text-truncate" style="max-width: 200px;">
                        {{ $currentProgramme->title ?? 'Ogene 98.3 FM' }}
                    </h6>
                    <small class="text-muted" x-show="!error">Live Broadcast</small>
                    <small class="text-danger" x-show="error">Stream Offline</small>
                </div>
            </div>
            <div class="col-md-4 d-none d-md-block">
                <div class="d-flex align-items-center">
                    <i class="fa fa-volume-down mr-2"></i>
                    <input type="range" class="custom-range" min="0" max="1" step="0.01" x-model="volume" @input="audio.volume = volume">
                    <i class="fa fa-volume-up ml-2"></i>
                </div>
            </div>
            <div class="col-md-4 text-right d-none d-md-block">
                <span class="badge badge-danger">ON AIR</span>
                <span class="ml-2 small text-muted">98.3 FM</span>
            </div>
        </div>
    </div>
</div>
