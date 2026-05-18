<?php

declare(strict_types=1);

namespace Database\Factories\Metro;

use App\Models\Category\Category;
use App\Models\Metro\Metro;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class MetroFactory extends Factory
{
    protected $model = Metro::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'slug' => $this->faker->unique()->slug,
            'content' => $this->faker->paragraphs(3, true),
            'author' => $this->faker->name,
            'user_id' => User::factory(),
            'category_id' => Category::factory(),
        ];
    }
}
