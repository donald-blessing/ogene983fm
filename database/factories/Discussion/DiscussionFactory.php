<?php

declare(strict_types=1);

namespace Database\Factories\Discussion;

use App\Models\Discussion\Discussion;
use App\Models\Programme\Programme;
use Illuminate\Database\Eloquent\Factories\Factory;

class DiscussionFactory extends Factory
{
    protected $model = Discussion::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'slug' => $this->faker->unique()->slug,
            'content' => $this->faker->paragraphs(3, true),
            'programme_id' => Programme::factory(),
        ];
    }
}
