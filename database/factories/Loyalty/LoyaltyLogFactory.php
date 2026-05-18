<?php

declare(strict_types=1);

namespace Database\Factories\Loyalty;

use App\Models\Loyalty\LoyaltyLog;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class LoyaltyLogFactory extends Factory
{
    protected $model = LoyaltyLog::class;

    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'points' => 10,
            'reason' => $this->faker->sentence,
            'action_type' => 'daily_login',
        ];
    }
}
