<?php

declare(strict_types=1);

namespace Database\Factories\Gallery;

use App\Models\Gallery\Album;
use App\Models\Gallery\AlbumUpload;
use Illuminate\Database\Eloquent\Factories\Factory;

class AlbumUploadFactory extends Factory
{
    protected $model = AlbumUpload::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'slug' => $this->faker->unique()->slug,
            'album_id' => Album::factory(),
        ];
    }
}
