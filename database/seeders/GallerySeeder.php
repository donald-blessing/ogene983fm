<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Category\Category;
use App\Models\Gallery\Album;
use App\Models\Gallery\AlbumUpload;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class GallerySeeder extends Seeder
{
    /**
     * Set to false for offline or faster seeding.
     */
    private bool $attachImages = true;

    public function run(): void
    {
        $albums = [
            [
                'title' => 'Live from the Studio',
                'category' => 'entertainment',
                'about' => 'Moments from the Ogene 98.3 FM studios: live bands, guest presenters, and the sessions that fill the East With The Best.',
                'cover' => 'https://images.unsplash.com/photo-1492684223066-81342ee5ff30?w=800&q=80',
                'uploads' => [
                    ['title' => 'Morning Flight in the booth', 'image' => 'https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?w=800&q=80'],
                    ['title' => 'Highlife Hour live session', 'image' => 'https://images.unsplash.com/photo-1511379938547-c1f69419868d?w=800&q=80'],
                    ['title' => 'Request Zone caller', 'image' => 'https://images.unsplash.com/photo-1598488035139-bdbb2231ce04?w=800&q=80'],
                ],
            ],
            [
                'title' => 'Culture Night in Enugwu Ukwu',
                'category' => 'igbo-culture',
                'about' => 'An evening of folktales, proverbs, and traditional music with Mama Africa and guests from across Anambra.',
                'cover' => 'https://images.unsplash.com/photo-1528605105345-5344ea20e269?w=800&q=80',
                'uploads' => [
                    ['title' => 'Traditional rulers in attendance', 'image' => 'https://images.unsplash.com/photo-1529107386315-e1a2ed48a620?w=800&q=80'],
                    ['title' => 'Drummers during the interval', 'image' => 'https://images.unsplash.com/photo-1467307983825-619715426c70?w=800&q=80'],
                    ['title' => 'Audience joining in', 'image' => 'https://images.unsplash.com/photo-1495020689067-958852a7765e?w=800&q=80'],
                ],
            ],
            [
                'title' => 'Ogene on the Road',
                'category' => 'eastern-news',
                'about' => 'The station team out in the community, bringing the frequency to markets, schools, and local events across the South-East.',
                'cover' => 'https://images.unsplash.com/photo-1504450758481-7338eba7524a?w=800&q=80',
                'uploads' => [
                    ['title' => 'Outside broadcast setup', 'image' => 'https://images.unsplash.com/photo-1478737270239-2f02b77fc618?w=800&q=80'],
                    ['title' => 'Talking with listeners', 'image' => 'https://images.unsplash.com/photo-1574629810360-7efbbe195018?w=800&q=80'],
                    ['title' => 'Station vehicle at the venue', 'image' => 'https://images.unsplash.com/photo-1533473359331-0135ef1b58bf?w=800&q=80'],
                ],
            ],
        ];

        foreach ($albums as $albumData) {
            $category = Category::where('slug', $albumData['category'])->first();

            if (! $category) {
                continue;
            }

            $album = Album::firstOrNew(['title' => $albumData['title']]);
            $album->title = $albumData['title'];
            $album->category_id = $category->id;
            $album->save();
            $album->storeAbout($albumData['about']);

            if ($this->attachImages && $album->getMedia('cover_images')->isEmpty()) {
                try {
                    $album->addMediaFromUrl($albumData['cover'])->toMediaCollection('cover_images');
                } catch (\Throwable) {
                    // Keep the album even when a remote image is unavailable.
                }
            }

            foreach ($albumData['uploads'] as $uploadData) {
                $upload = AlbumUpload::firstOrNew(['slug' => Str::slug($uploadData['title'])]);
                $upload->title = $uploadData['title'];
                $upload->album_id = $album->id;
                $upload->save();

                if ($this->attachImages && $upload->getMedia('images')->isEmpty()) {
                    try {
                        $upload->addMediaFromUrl($uploadData['image'])->toMediaCollection('images');
                    } catch (\Throwable) {
                        // Keep the item even when a remote image is unavailable.
                    }
                }
            }
        }
    }
}
