<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Http\Middleware\VerifyCsrfToken;
use App\Models\Category\Category;
use App\Models\Discussion\Discussion;
use App\Models\Gallery\Album;
use App\Models\Post\Post;
use App\Models\Presenter\Presenter;
use App\Models\Programme\Programme;
use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\Attributes\Test;
use Spatie\Permission\Models\Role;
use Tests\TestCase;

class SearchAndCategoryTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        $this->withoutMiddleware(VerifyCsrfToken::class);
        Role::firstOrCreate(['name' => 'admin']);
    }

    #[Test]
    public function user_can_search_for_content(): void
    {
        $category = Category::factory()->create(['name' => 'News']);
        $post = Post::factory()->create([
            'title' => 'Unique Searchable Post',
            'category_id' => $category->id,
        ]);

        $response = $this->get(route('search', ['search' => 'Unique']));

        $response->assertStatus(200);
        $response->assertSee('Unique Searchable Post');
    }

    #[Test]
    public function search_returns_results_from_every_registered_model(): void
    {
        $category = Category::factory()->create(['name' => 'Zebra Category']);
        Post::factory()->create([
            'title' => 'Zebra Post',
            'category_id' => $category->id,
            'status' => 'published',
        ]);
        Album::factory()->create(['title' => 'Zebra Album']);
        Discussion::factory()->create(['title' => 'Zebra Discussion']);
        Presenter::factory()->create(['name' => 'Zebra Presenter']);
        Programme::factory()->create(['title' => 'Zebra Programme']);

        $response = $this->get(route('search', ['search' => 'Zebra']));

        $response->assertOk();
        $response->assertSee('Zebra Post');
        $response->assertSee('Zebra Album');
        $response->assertSee('Zebra Discussion');
        $response->assertSee('Zebra Presenter');
        $response->assertSee('Zebra Programme');
        $response->assertSee('Zebra Category');
    }
}
