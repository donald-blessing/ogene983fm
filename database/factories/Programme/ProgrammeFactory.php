<?php

declare(strict_types=1);

namespace Database\Factories\Programme;

use App\Models\Programme\Programme;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProgrammeFactory extends Factory
{
    protected $model = Programme::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'slug' => $this->faker->unique()->slug,
        ];
    }
}
