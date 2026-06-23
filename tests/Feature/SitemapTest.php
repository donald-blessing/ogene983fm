<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Models\Post\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\File;
use Tests\TestCase;

class SitemapTest extends TestCase
{
    use RefreshDatabase;

    public function test_it_can_generate_sitemap(): void
    {
        // Ensure we have some data
        Post::factory()->create(['status' => 'published']);

        $sitemapPath = public_path('sitemap.xml');

        if (File::exists($sitemapPath)) {
            File::delete($sitemapPath);
        }

        $this->artisan('sitemap:generate')
            ->assertSuccessful()
            ->expectsOutput('Sitemap generated successfully!');

        $this->assertTrue(File::exists($sitemapPath));

        $content = File::get($sitemapPath);
        $this->assertStringContainsString('<urlset', $content);
        $this->assertStringContainsString(config('app.url'), $content);
    }
}
