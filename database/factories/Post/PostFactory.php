<?php

declare(strict_types=1);

namespace Database\Factories\Post;

use App\Models\Category\Category;
use App\Models\Post\Post;
use App\Models\Programme\Programme;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'slug' => $this->faker->unique()->slug,
            'content' => $this->faker->paragraphs(3, true),
            'user_id' => User::factory(),
            'category_id' => Category::factory(),
            'programme_id' => Programme::factory(),
        ];
    }
}
