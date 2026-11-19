<?php

declare(strict_types=1);

namespace Database\Factories\SongOfTheWeek;

use App\Models\SongOfTheWeek\SongOfTheWeek;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class SongOfTheWeekFactory extends Factory
{
    protected $model = SongOfTheWeek::class;

    public function definition()
    {
        $title = $this->faker->unique()->sentence(3);

        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'artist' => $this->faker->name,
            'album' => $this->faker->word,
        ];
    }
}
