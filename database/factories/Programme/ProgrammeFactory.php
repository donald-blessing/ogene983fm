<?php

declare(strict_types=1);

namespace Database\Factories\Programme;

use App\Models\Programme\Programme;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProgrammeFactory extends Factory
{
    protected $model = Programme::class;

    public function definition()
    {
        $titles = [
            'Ogene Morning Flight',
            'The Highlife Hour',
            'Eastern Political Pulse',
            'Sports Arena Live',
            'Igbo Request Night',
            'Cultural Heritage Show',
            'Business Drive-Time',
            'Weekend Vibe with DJ Ogene',
            'Midday Medley',
            'Night of a Thousand Songs',
        ];

        $title = $this->faker->unique()->randomElement($titles);

        return [
            'title' => $title,
            'slug' => Str::slug($title),
        ];
    }
}
