<div class="glass-panel rounded-[2rem] p-8 text-center" 
     x-data="{ 
        recording: false,
        recorded: false,
        stream: null,
        mediaRecorder: null,
        chunks: [],
        timer: 0,
        interval: null,
        audioUrl: null,
        
        async startRecording() {
            try {
                this.stream = await navigator.mediaDevices.getUserMedia({ audio: true });
                this.mediaRecorder = new MediaRecorder(this.stream);
                this.chunks = [];
                
                this.mediaRecorder.ondataavailable = (e) => this.chunks.push(e.data);
                this.mediaRecorder.onstop = () => {
                    const blob = new Blob(this.chunks, { type: 'audio/mpeg' });
                    this.audioUrl = URL.createObjectURL(blob);
                    
                    // Use standard Livewire file upload pattern
                    let file = new File([blob], 'shoutout.mp3', { type: 'audio/mpeg' });
                    @this.upload('audioFile', file);
                };

                this.mediaRecorder.start();
                this.recording = true;
                this.recorded = false;
                this.timer = 0;
                this.interval = setInterval(() => {
                    this.timer++;
                    if (this.timer >= 15) this.stopRecording();
                }, 1000);
            } catch (err) {
                alert('Microphone access denied or not available.');
            }
        },

        stopRecording() {
            if (this.mediaRecorder && this.recording) {
                this.mediaRecorder.stop();
                this.stream.getTracks().forEach(track => track.stop());
                clearInterval(this.interval);
                this.recording = false;
                this.recorded = true;
            }
        }
     }">
    
    @if($isSuccess)
        <div class="py-12">
            <i class="fa fa-check-circle text-secondary text-6xl mb-4 animate-bounce"></i>
            <h3 class="text-2xl font-display text-white">Shout-out Sent!</h3>
            <p class="text-white/60 mt-2">Listen closely, your voice might be on air soon.</p>
            <button @click="$wire.set('isSuccess', false)" class="btn-fusion-primary mt-8">Send Another</button>
        </div>
    @else
        <div class="flex flex-col items-center">
            <h3 class="text-2xl font-display text-white mb-2">The Mic is Yours</h3>
            <p class="text-white/40 text-sm mb-8">Record a 15-second message for the studio</p>

            <!-- Recording Circle -->
            <div class="relative w-32 h-32 mb-8 flex items-center justify-center">
                <div class="absolute inset-0 bg-primary/20 rounded-full blur-xl" x-show="recording"></div>
                <button 
                    @mousedown="startRecording()" 
                    @mouseup="stopRecording()"
                    @touchstart.prevent="startRecording()"
                    @touchend.prevent="stopRecording()"
                    class="relative z-10 w-24 h-24 rounded-full flex items-center justify-center transition-all duration-300 transform active:scale-90"
                    :class="recording ? 'bg-red-500 scale-110' : 'bg-primary shadow-[0_0_30px_rgba(191,0,255,0.4)]'"
                >
                    <i class="fa text-3xl text-white" :class="recording ? 'fa-stop' : 'fa-microphone'"></i>
                </button>
                
                <!-- Progress Ring (SVG) -->
                <svg class="absolute inset-0 w-full h-full -rotate-90" x-show="recording">
                    <circle 
                        cx="64" cy="64" r="60" 
                        fill="none" 
                        stroke="currentColor" 
                        class="text-secondary" 
                        stroke-width="4"
                        stroke-dasharray="377"
                        :stroke-dashoffset="377 - (377 * timer / 15)"
                    />
                </svg>
            </div>

            <div class="h-8">
                <span class="text-secondary font-black tracking-widest text-lg" x-show="recording">
                    00:{{ str_pad(timer, 2, '0', STR_PAD_LEFT) }}
                </span>
                <span class="text-white/20 text-xs uppercase font-bold tracking-widest" x-show="!recording && !recorded">
                    Hold to Record
                </span>
            </div>

            @if(!Auth::check())
                <div class="mt-8 w-full max-w-xs">
                    <input 
                        wire:model="guestName" 
                        type="text" 
                        placeholder="Your Name" 
                        class="w-full bg-white/5 border-white/10 rounded-xl text-white placeholder-white/20 focus:ring-primary"
                    >
                    @error('guestName') <span class="text-red-400 text-xs mt-1">{{ $message }}</span> @enderror
                </div>
            @endif

            <div class="mt-8" x-show="recorded">
                <p class="text-white/60 text-sm mb-4">Preview your recording:</p>
                <audio :src="audioUrl" controls class="mb-6 h-10"></audio>
                <div class="flex gap-4 justify-center">
                    <button @click="recorded = false; audioUrl = null" class="btn-fusion liquid-glass text-xs">Redo</button>
                    <button wire:click="submit" class="btn-fusion-primary text-xs">Send to Studio</button>
                </div>
            </div>
            
            @error('audioFile') <span class="text-red-400 text-xs mt-4">{{ $message }}</span> @enderror
        </div>
    @endif
</div>
