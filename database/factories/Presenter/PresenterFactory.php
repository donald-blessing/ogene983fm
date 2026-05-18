<?php

declare(strict_types=1);

namespace Database\Factories\Presenter;

use App\Models\Presenter\Presenter;
use Illuminate\Database\Eloquent\Factories\Factory;

class PresenterFactory extends Factory
{
    protected $model = Presenter::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'slug' => $this->faker->unique()->slug,
        ];
    }
}
