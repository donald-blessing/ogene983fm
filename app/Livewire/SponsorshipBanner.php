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
        <div>
            @if($activeSponsorship)
            <div class="sponsorship-banner my-4 text-center">
                <a href="{{ $activeSponsorship->link ?? '#' }}" target="_blank">
                    <img src="{{ $activeSponsorship->getFirstMediaUrl('banners') }}" 
                         alt="{{ $activeSponsorship->title }}" 
                         class="img-fluid rounded shadow-sm"
                         style="max-height: 150px;">
                </a>
                <p class="small text-muted mt-1">Sponsored by: {{ $activeSponsorship->title }}</p>
            </div>
            @endif
        </div>
        HTML;
    }
}
