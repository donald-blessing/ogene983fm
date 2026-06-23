<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Models\Post\Post;
use App\Models\Presenter\Presenter;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ContentEnhancementsTest extends TestCase
{
    use RefreshDatabase;

    public function test_presenter_can_have_social_handles(): void
    {
        $presenter = Presenter::factory()->create([
            'twitter_handle' => '@test_twitter',
            'instagram_handle' => '@test_insta',
            'facebook_url' => 'https://facebook.com/test',
        ]);

        $this->assertEquals('@test_twitter', $presenter->twitter_handle);
        $this->assertEquals('@test_insta', $presenter->instagram_handle);
        $this->assertEquals('https://facebook.com/test', $presenter->facebook_url);
    }

    public function test_post_can_have_status_and_featured_flag(): void
    {
        $draftPost = Post::factory()->create(['status' => 'draft']);
        $featuredPost = Post::factory()->create(['is_featured' => true]);

        $this->assertEquals('draft', $draftPost->status);
        $this->assertTrue($featuredPost->is_featured);
    }
}
