<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Models\Presenter\Presenter;
use App\Models\Programme\Programme;
use App\Models\Programme\ProgrammeTime;
use App\Settings\GeneralSettings;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Carbon;
use Tests\TestCase;

class HomePageTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        GeneralSettings::fake([
            'site_name' => 'Ogene 98.3 FM',
            'site_motto' => 'Voice of the people',
            'site_logo' => 'images/logo.png',
            'stream_url' => 'https://example.test/stream',
            'stream_type' => 'audio',
            'contact_email' => 'info@ogene983fm.com',
            'contact_phone' => '+234 807 772 6636',
            'contact_address' => 'No 2 NTA Road, Old Onitsha Enugu Road, Enugwu Ukwu, Anambra State, Nigeria',
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

    public function test_home_lists_the_programme_on_air_and_todays_schedule(): void
    {
        Carbon::setTestNow(Carbon::parse('2026-11-16 10:30:00'));

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

        $this->get(route('home'))
            ->assertOk()
            ->assertSee('Ogene Morning Flight')
            ->assertSee('Ada Nwosu')
            ->assertSee('On air now');
    }

    public function test_home_renders_when_no_content_exists(): void
    {
        $this->get(route('home'))
            ->assertOk()
            ->assertSee('No shows scheduled for today')
            ->assertSee('No stories published yet');
    }

    public function test_listen_page_renders(): void
    {
        $this->get(route('listen'))
            ->assertOk()
            ->assertSee('Start listening');
    }
}
