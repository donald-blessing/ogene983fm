<?php

namespace App\Providers;

use App\Models\Category\Category;
use App\Models\Post\Post;
use App\Models\Presenter\Presenter;
use App\Models\Programme\Programme;
use App\Models\Tag\Tag;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        view()->composer(['layouts.pages.includes.navbar', 'site.pages.index'], function ($view): void {
            $programmes = Programme::with(['description', 'media', 'programmeTimes'])->get();
            $view->with('programmes', $programmes);
        });

        view()->composer('layouts.pages.includes.navbar', function ($view): void {
            $presenters = Presenter::with(['description', 'media'])->get();
            $view->with('presenters', $presenters);
        });

        view()->composer(['layouts.pages.includes.navbar', 'site.pages.index', 'site.pages.blog', 'site.pages.programmes.blog', 'site.pages.presenters.blog', 'site.pages.gallery.blog'], function ($view): void {
            $categories = Category::with(['description', 'media'])->get();
            $view->with('categories', $categories);
        });

        view()->composer(['layouts.pages.includes.navbar', 'site.pages.index', 'site.pages.blog', 'site.pages.programmes.blog', 'site.pages.presenters.blog', 'site.pages.gallery.blog'], function ($view): void {
            $tags = Tag::all();
            $view->with('tags', $tags);
        });

        view()->composer(['site.pages.blog', 'site.pages.programmes.blog', 'site.pages.presenters.blog', 'site.pages.gallery.blog'], function ($view): void {
            $recents = Post::with(['category', 'category.description', 'category.media', 'description', 'media'])->orderBy('created_at', 'desc')->limit(5)->get();
            $view->with('recents', $recents);
        });
    }
}
