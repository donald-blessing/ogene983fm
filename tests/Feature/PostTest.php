<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Models\Post\Post;
use App\Models\Category\Category;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PostTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function blog_index_page_is_accessible(): void
    {
        Category::factory()->create();
        Post::factory()->count(3)->create();

        $response = $this->get(route('post.index'));

        $response->assertStatus(200);
    }
}
