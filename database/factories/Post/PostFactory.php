<?php

declare(strict_types=1);

namespace Database\Factories\Post;

use App\Models\Category\Category;
use App\Models\Post\Post;
use App\Models\Programme\Programme;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition()
    {
        $titles = [
            'Legendary Highlife Musician to Perform in Enugu',
            'Ogene Music: The Sound of the Eastern Heartland',
            'New Developmental Projects Unveiled in Anambra State',
            'Top 10 Highlife Hits of the Decade',
            'Celebrating the Rich Igbo Cultural Heritage',
            'Economic Outlook: Trade Booms in South-East Markets',
            'Sports Roundup: Enyimba FC Secures Major Victory',
            'The Evolution of Contemporary Igbo Broadcasting',
            'Voice of the People: Listener Shout-outs of the Week',
            'Inter-State Rail Project Gains Momentum in the East',
        ];

        $title = $this->faker->randomElement($titles) . ' ' . $this->faker->numberBetween(2025, 2027);

        return [
            'title' => $title,
            'slug' => Str::slug($title) . '-' . $this->faker->unique()->numberBetween(1, 1000),
            'content' => $this->faker->paragraphs(5, true),
            'user_id' => User::factory(),
            'category_id' => Category::factory(),
            'programme_id' => Programme::factory(),
            'status' => $this->faker->randomElement(['published', 'draft']),
            'is_featured' => $this->faker->boolean(20),
        ];
    }
}
