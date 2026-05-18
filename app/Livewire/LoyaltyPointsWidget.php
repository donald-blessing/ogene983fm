<?php

declare(strict_types=1);

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class LoyaltyPointsWidget extends Component
{
    public function render()
    {
        return <<<'HTML'
        <div class="tile">
            <h3 class="tile-title"><i class="fa fa-star text-warning"></i> Loyalty Rewards</h3>
            <div class="tile-body text-center">
                <div class="display-4 font-weight-bold text-primary">
                    {{ Auth::user()->loyalty_points }}
                </div>
                <p class="text-muted">Total Ogene Points</p>
                <hr>
                <div class="text-left">
                    <h6>Recent Activity</h6>
                    <ul class="list-unstyled small">
                        @foreach(Auth::user()->loyaltyLogs()->latest()->take(5)->get() as $log)
                        <li class="d-flex justify-content-between border-bottom py-1">
                            <span>{{ $log->reason }}</span>
                            <span class="text-success font-weight-bold">+{{ $log->points }}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="tile-footer">
                <a class="btn btn-primary btn-block" href="#">Redeem Points</a>
            </div>
        </div>
        HTML;
    }
}
