<?php

declare(strict_types=1);

namespace Database\Factories\Gallery;

use App\Models\Category\Category;
use App\Models\Gallery\Album;
use Illuminate\Database\Eloquent\Factories\Factory;

class AlbumFactory extends Factory
{
    protected $model = Album::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'slug' => $this->faker->unique()->slug,
            'category_id' => Category::factory(),
        ];
    }
}
