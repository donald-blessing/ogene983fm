<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Models\Category\Category;
use App\Models\Post\Post;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Spatie\Permission\Models\Role;
use Tests\TestCase;

class SearchAndCategoryTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        $this->withoutMiddleware(\App\Http\Middleware\VerifyCsrfToken::class);
        Role::firstOrCreate(['name' => 'admin']);
    }

    /** @test */
    public function user_can_search_for_content(): void
    {
        $category = Category::factory()->create(['name' => 'News']);
        $post = Post::factory()->create([
            'title' => 'Unique Searchable Post',
            'category_id' => $category->id
        ]);

        $response = $this->get(route('search', ['search' => 'Unique']));

        $response->assertStatus(200);
        $response->assertSee('Unique Searchable Post');
    }
}
