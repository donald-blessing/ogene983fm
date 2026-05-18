<?php

declare(strict_types=1);

namespace Database\Factories\SongOfTheWeek;

use App\Models\SongOfTheWeek\SongOfTheWeek;
use Illuminate\Database\Eloquent\Factories\Factory;

class SongOfTheWeekFactory extends Factory
{
    protected $model = SongOfTheWeek::class;

    public function definition()
    {
        return [
            'name' => $this->faker->sentence,
            'slug' => $this->faker->unique()->slug,
        ];
    }
}
