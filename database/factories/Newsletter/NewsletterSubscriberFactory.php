<?php

declare(strict_types=1);

namespace Database\Factories\Newsletter;

use App\Models\Newsletter\NewsletterSubscriber;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class NewsletterSubscriberFactory extends Factory
{
    protected $model = NewsletterSubscriber::class;

    public function definition()
    {
        return [
            'email' => $this->faker->unique()->safeEmail,
            'UUID' => (string) Str::random(50),
        ];
    }
}
