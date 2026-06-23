<?php

declare(strict_types=1);

namespace Database\Factories\Presenter;

use App\Models\Presenter\Presenter;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PresenterFactory extends Factory
{
    protected $model = Presenter::class;

    public function definition()
    {
        $name = $this->faker->unique()->name;

        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'twitter_handle' => '@'.str_replace(' ', '_', strtolower($name)),
            'instagram_handle' => '@'.str_replace(' ', '_', strtolower($name)),
            'facebook_url' => 'https://facebook.com/'.str_replace(' ', '.', strtolower($name)),
        ];
    }
}
