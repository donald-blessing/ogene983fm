<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Models\Category\Category;
use App\Models\Gallery\Album;
use App\Models\Post\Post;
use App\Models\Presenter\Presenter;
use App\Models\Programme\Programme;
use App\Models\Programme\ProgrammeTime;
use App\Settings\GeneralSettings;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Carbon;
use Tests\TestCase;

class PublicPagesTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        Carbon::setTestNow(Carbon::parse('2026-11-16 10:30:00'));

        GeneralSettings::fake([
            'site_name' => 'Ogene 98.3 FM',
            'site_motto' => 'Voice of the people',
            'site_logo' => 'images/logo.png',
            'stream_url' => 'https://example.test/stream',
            'stream_type' => 'audio',
            'contact_email' => 'info@ogene983fm.com',
            'contact_phone' => '+234 807 772 6636',
            'contact_address' => 'Awka, Anambra',
            'facebook_url' => null,
            'twitter_url' => null,
            'instagram_url' => null,
            'youtube_url' => null,
        ]);
    }

    protected function tearDown(): void
    {
        Carbon::setTestNow();

        parent::tearDown();
    }

    public function test_schedule_page_lists_programmes_by_day(): void
    {
        $presenter = Presenter::factory()->create(['name' => 'Ada Nwosu']);

        $programme = Programme::factory()->create([
            'title' => 'Ogene Morning Flight',
            'slug' => 'ogene-morning-flight',
        ]);
        $programme->presenters()->attach($presenter);
        $programme->programmeTimes()->attach(
            ProgrammeTime::factory()->create([
                'day' => 'monday',
                'from' => strtotime('10:00'),
                'to' => strtotime('12:00'),
            ])
        );

        $this->get(route('programme.index'))
            ->assertOk()
            ->assertSee('Programme')
            ->assertSee('Monday')
            ->assertSee('Ogene Morning Flight')
            ->assertSee('Ada Nwosu')
            ->assertSee('On air');
    }

    public function test_schedule_page_has_an_empty_state(): void
    {
        $this->get(route('programme.index'))
            ->assertOk()
            ->assertSee('The schedule is being finalised');
    }

    public function test_programme_page_shows_hosts_and_published_times(): void
    {
        $presenter = Presenter::factory()->create(['name' => 'Chidi Okeke']);

        $programme = Programme::factory()->create([
            'title' => 'The Highlife Hour',
            'slug' => 'the-highlife-hour',
        ]);
        $programme->presenters()->attach($presenter);
        $programme->programmeTimes()->attach(
            ProgrammeTime::factory()->create([
                'day' => 'monday',
                'from' => strtotime('09:00'),
                'to' => strtotime('11:00'),
            ])
        );

        $this->get(route('programme.show', ['programme' => $programme->slug]))
            ->assertOk()
            ->assertSee('The Highlife Hour')
            ->assertSee('Chidi Okeke')
            ->assertSee('Episode archive')
            ->assertSee('No episodes published yet');
    }

    public function test_presenter_index_and_profile_render(): void
    {
        $presenter = Presenter::factory()->create([
            'name' => 'Ngozi Eze',
            'slug' => 'ngozi-eze',
        ]);

        $programme = Programme::factory()->create(['title' => 'Eastern Nights']);
        $programme->presenters()->attach($presenter);

        $this->get(route('presenter.index'))
            ->assertOk()
            ->assertSee('Ngozi Eze')
            ->assertSee('Eastern Nights');

        $this->get(route('presenter.show', ['presenter' => $presenter->slug]))
            ->assertOk()
            ->assertSee('Ngozi Eze')
            ->assertSee('On the schedule')
            ->assertSee('Eastern Nights');
    }

    public function test_news_index_and_article_render(): void
    {
        $category = Category::factory()->create(['name' => 'Highlife', 'slug' => 'highlife']);

        $post = Post::factory()->create([
            'title' => 'Highlife legend honoured in Enugu',
            'slug' => 'highlife-legend-honoured',
            'category_id' => $category->id,
            'status' => 'published',
        ]);

        $this->get(route('post.index'))
            ->assertOk()
            ->assertSee('Highlife legend honoured in Enugu')
            ->assertSee('Highlife');

        $this->get(route('post.category', ['category' => $category->slug]))
            ->assertOk()
            ->assertSee('Highlife legend honoured in Enugu');

        $this->get(route('post.show', ['category' => $category->slug, 'post' => $post->slug]))
            ->assertOk()
            ->assertSee('Highlife legend honoured in Enugu')
            ->assertSee('Join the conversation');
    }

    public function test_gallery_index_and_album_render(): void
    {
        $album = Album::factory()->create([
            'title' => 'Studio sessions',
            'slug' => 'studio-sessions',
        ]);

        $this->get(route('gallery.album.index'))
            ->assertOk()
            ->assertSee('Studio sessions');

        $this->get(route('gallery.album.show', ['album' => $album->slug]))
            ->assertOk()
            ->assertSee('Studio sessions')
            ->assertSee('In this album');
    }

    public function test_static_and_auth_pages_render(): void
    {
        $this->get(route('about'))->assertOk()->assertSee('Authentically');
        $this->get(route('contact'))->assertOk()->assertSee('Send a message');
        $this->get(route('login'))->assertOk()->assertSee('Welcome back');
        $this->get(route('register'))->assertOk()->assertSee('Join the frequency');
        $this->get(route('password.request'))->assertOk()->assertSee('Send reset link');
    }

    public function test_search_without_a_term_redirects_to_the_news_index(): void
    {
        $this->get(route('search'))->assertRedirect(route('post.index'));
        $this->get(route('search', ['search' => '   ']))->assertRedirect(route('post.index'));
    }

    public function test_search_renders_matching_posts(): void
    {
        $category = Category::factory()->create(['name' => 'Highlife', 'slug' => 'highlife']);

        Post::factory()->create([
            'title' => 'Ogene marks a decade on the dial',
            'slug' => 'ogene-marks-a-decade',
            'category_id' => $category->id,
            'status' => 'published',
        ]);

        $this->get(route('search', ['search' => 'decade']))
            ->assertOk()
            ->assertSee('Ogene marks a decade on the dial');
    }

    public function test_unknown_page_returns_a_designed_404(): void
    {
        $this->get('/this-page-does-not-exist')
            ->assertNotFound()
            ->assertSee('Static in the air');
    }
}
