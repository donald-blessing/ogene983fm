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
            <div class="group overflow-hidden rounded-lg border border-line bg-surface transition-colors hover:border-[#4a3f39]">
                <a href="{{ $activeSponsorship->link ?? '#' }}" target="_blank" rel="noopener noreferrer" class="relative block">
                    <img src="{{ $activeSponsorship->getFirstMediaUrl('banners') }}"
                         alt="{{ $activeSponsorship->title }}"
                         loading="lazy"
                         class="max-h-[180px] w-full object-cover transition-transform duration-700 group-hover:scale-[1.02]">
                    <div class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-black/80 to-transparent p-4 pt-8">
                        <span class="text-[10px] font-semibold uppercase tracking-[0.14em] text-brand-text">Sponsored</span>
                        <p class="mt-0.5 text-[15px] font-semibold leading-snug text-paper">{{ $activeSponsorship->title }}</p>
                    </div>
                </a>
            </div>
            @endif
        </div>
        HTML;
    }
}
