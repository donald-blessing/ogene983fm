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
        $brands = [
            'MTN Nigeria',
            'Airtel Africa',
            'Glo (Globacom)',
            '9mobile',
            'First Bank of Nigeria',
            'GTBank',
            'Zenith Bank',
            'Innoson Vehicle Manufacturing',
            'Dangote Group',
            'Hero Lager Beer',
            'Life Continental Beer',
        ];

        return [
            'title' => $this->faker->randomElement($brands),
            'link' => $this->faker->url,
            'start_time' => now()->subDays(10),
            'end_time' => now()->addDays(30),
            'is_active' => $this->faker->boolean(80),
            'clicks' => $this->faker->numberBetween(100, 5000),
            'impressions' => $this->faker->numberBetween(5000, 50000),
        ];
    }
}
