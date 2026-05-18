<?php

declare(strict_types=1);

namespace Database\Factories\Monetization;

use App\Models\Monetization\Sponsorship;
use Illuminate\Database\Eloquent\Factories\Factory;

class SponsorshipFactory extends Factory
{
    protected $model = Sponsorship::class;

    public function definition()
    {
        return [
            'title' => $this->faker->company,
            'link' => $this->faker->url,
            'start_time' => now()->subDay(),
            'end_time' => now()->addDay(),
            'is_active' => true,
        ];
    }
}
