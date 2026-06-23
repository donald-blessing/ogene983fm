<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Models\Category\Category;
use App\Models\Post\Post;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class GuestAccessTest extends TestCase
{
    use RefreshDatabase;

    public function test_guest_can_view_published_post(): void
    {
        $category = Category::factory()->create();
        $post = Post::factory()->create([
            'category_id' => $category->id,
            'status' => 'published',
            'title' => 'Public Post',
            'slug' => 'public-post'
        ]);

        $response = $this->get(route('post.show', ['category' => $category->slug, 'post' => $post->slug]));

        $response->assertStatus(200);
        $response->assertSee('Public Post');
    }

    public function test_guest_cannot_view_draft_post(): void
    {
        $category = Category::factory()->create();
        $post = Post::factory()->create([
            'category_id' => $category->id,
            'status' => 'draft',
            'slug' => 'draft-post'
        ]);

        $response = $this->get(route('post.show', ['category' => $category->slug, 'post' => $post->slug]));

        $response->assertStatus(403);
    }
}
