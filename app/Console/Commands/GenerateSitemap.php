<?php

declare(strict_types=1);

namespace App\Console\Commands;

use App\Models\Category\Category;
use App\Models\Post\Post;
use App\Models\Presenter\Presenter;
use App\Models\Programme\Programme;
use Illuminate\Console\Command;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate the sitemap.xml for SEO';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $sitemap = Sitemap::create();

        // Add Static Pages
        $sitemap->add(Url::create(route('home'))->setPriority(1.0)->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY));
        $sitemap->add(Url::create(route('about'))->setPriority(0.8));
        $sitemap->add(Url::create(route('contact'))->setPriority(0.8));

        // Add Posts
        Post::where('status', 'published')->get()->each(function (Post $post) use ($sitemap) {
            $sitemap->add(Url::create($post->url)
                ->setLastModificationDate($post->updated_at)
                ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
                ->setPriority(0.9));
        });

        // Add Programmes
        Programme::all()->each(function (Programme $programme) use ($sitemap) {
            $sitemap->add(Url::create($programme->url)
                ->setPriority(0.7));
        });

        // Add Presenters
        Presenter::all()->each(function (Presenter $presenter) use ($sitemap) {
            $sitemap->add(Url::create($presenter->url)
                ->setPriority(0.6));
        });

        // Add Categories
        Category::all()->each(function (Category $category) use ($sitemap) {
            $sitemap->add(Url::create(route('post.category', $category->slug))
                ->setPriority(0.5));
        });

        $sitemap->writeToFile(public_path('sitemap.xml'));

        $this->info('Sitemap generated successfully!');

        return self::SUCCESS;
    }
}
