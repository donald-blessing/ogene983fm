<?php

declare(strict_types=1);

namespace Database\Factories\Newsletter;

use App\Models\Newsletter\Newsletter;
use Illuminate\Database\Eloquent\Factories\Factory;

class NewsletterFactory extends Factory
{
    protected $model = Newsletter::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'slug' => $this->faker->unique()->slug,
        ];
    }
}
