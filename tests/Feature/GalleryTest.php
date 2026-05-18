<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Models\Gallery\Album;
use App\Models\Gallery\AlbumUpload;
use App\Models\Category\Category;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class GalleryTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function public_can_view_albums_index(): void
    {
        $category = Category::factory()->create();
        Album::factory()->count(3)->create(['category_id' => $category->id]);

        $response = $this->get(route('gallery.album.index'));

        $response->assertStatus(200);
    }
}
