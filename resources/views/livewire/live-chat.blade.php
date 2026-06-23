<div class="glass-panel rounded-[2rem] flex flex-col h-[500px] overflow-hidden" 
     x-data="{ 
        scrollToBottom() {
            const container = this.$refs.chatContainer;
            container.scrollTop = container.scrollHeight;
        }
     }"
     x-init="scrollToBottom()"
     @message-sent.window="scrollToBottom()">
    
    <!-- Chat Header -->
    <div class="px-6 py-4 border-b border-white/5 flex items-center justify-between bg-white/5">
        <div class="flex items-center gap-2">
            <span class="h-2 w-2 bg-secondary rounded-full animate-pulse"></span>
            <h4 class="text-white text-lg font-display">Live Discussion</h4>
        </div>
        <span class="text-white/40 text-xs font-bold uppercase tracking-widest">{{ count($messages) }} Messages</span>
    </div>

    <!-- Messages Area -->
    <div x-ref="chatContainer" class="flex-1 overflow-y-auto p-6 space-y-4 scroll-smooth">
        @forelse($messages as $msg)
            <div class="flex flex-col {{ ($msg['user_id'] ?? null) == Auth::id() ? 'items-end' : 'items-start' }}">
                <div class="flex items-center gap-2 mb-1">
                    <span class="text-[10px] font-bold uppercase tracking-tighter {{ ($msg['user_id'] ?? null) == Auth::id() ? 'text-primary' : 'text-secondary' }}">
                        {{ $msg['user']['name'] ?? 'Guest' }}
                    </span>
                    <span class="text-[8px] text-white/20">{{ \Carbon\Carbon::parse($msg['created_at'])->format('H:i') }}</span>
                </div>
                <div class="px-4 py-2 rounded-2xl max-w-[85%] text-sm {{ ($msg['user_id'] ?? null) == Auth::id() ? 'bg-primary/20 text-white rounded-tr-none border border-primary/20' : 'bg-white/5 text-white/80 rounded-tl-none border border-white/5' }}">
                    {{ $msg['message'] }}
                </div>
            </div>
        @empty
            <div class="h-full flex flex-col items-center justify-center text-center text-white/30 space-y-4">
                <i class="fa fa-comments text-4xl mb-2 opacity-50"></i>
                <p class="font-medium text-sm">No messages yet.</p>
                <p class="text-xs">Be the first to join the conversation!</p>
            </div>
        @endforelse
    </div>

    <!-- Input Area -->
    <div class="p-4 bg-white/5 border-t border-white/5">
        @auth
            <form wire:submit.prevent="sendMessage" class="flex gap-2">
                <input 
                    wire:model="newMessage" 
                    type="text" 
                    placeholder="Join the conversation..." 
                    class="flex-1 bg-white/5 border-none rounded-xl text-sm focus:ring-1 focus:ring-primary placeholder-white/20"
                    aria-label="Chat message input"
                >
                <button type="submit" class="bg-primary hover:bg-primary/80 text-white h-10 w-10 rounded-xl flex items-center justify-center transition-transform active:scale-95 shadow-lg shadow-primary/20" aria-label="Send message">
                    <i class="fa fa-paper-plane"></i>
                </button>
            </form>
        @else
            <div class="text-center py-2">
                <a href="{{ route('login') }}" class="text-primary font-bold hover:underline text-sm">Login to participate</a>
            </div>
        @endauth
    </div>
</div>
