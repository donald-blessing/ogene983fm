<?php

declare(strict_types=1);

namespace App\Livewire;

use App\Models\Monetization\Sponsorship;
use Livewire\Component;

class SponsorshipBanner extends Component
{
    public $activeSponsorship;

    public function mount()
    {
        $this->activeSponsorship = Sponsorship::active()->inRandomOrder()->first();
    }

    public function render()
    {
        return <<<'HTML'
        <div class="w-full">
            @if($activeSponsorship)
            <div class="glass-panel rounded-2xl overflow-hidden my-8 group transition-all duration-500 hover:neon-border-green">
                <a href="{{ $activeSponsorship->link ?? '#' }}" target="_blank" class="block relative">
                    <div class="absolute inset-0 bg-gradient-to-t from-bg-dark/80 to-transparent z-10 opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <img src="{{ $activeSponsorship->getFirstMediaUrl('banners') }}" 
                         alt="{{ $activeSponsorship->title }}" 
                         class="w-full object-cover transition-transform duration-700 group-hover:scale-105"
                         style="max-height: 200px;">
                    <div class="absolute bottom-4 left-4 z-20 opacity-0 group-hover:opacity-100 transition-all duration-500 transform translate-y-2 group-hover:translate-y-0">
                        <span class="bg-secondary text-bg-dark text-[10px] font-black px-2 py-1 rounded uppercase tracking-tighter">Sponsor</span>
                        <h5 class="text-white font-display text-lg mt-1 shadow-black/50 drop-shadow-lg">{{ $activeSponsorship->title }}</h5>
                    </div>
                </a>
            </div>
            @endif
        </div>
        HTML;
    }
}
