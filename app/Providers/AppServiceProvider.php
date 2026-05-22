<?php

declare(strict_types=1);

namespace App\Providers;

use App\Models\Category\Category;
use App\Models\Gallery\Album;
use App\Models\Post\Post;
use App\Models\Presenter\Presenter;
use App\Models\Programme\Programme;
use App\Models\SongOfTheWeek\SongOfTheWeek;
use App\Models\Tag\Tag;
use Illuminate\Database\Eloquent\Model;
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

        // Prevent N+1 queries in development
        Model::preventLazyLoading(! app()->isProduction());

        // View Composers for common site data
        
        // Lightweight categories for navigation
        view()->composer('layouts.pages.includes.navbar', function ($view): void {
            $view->with('categories', Category::select('id', 'name', 'slug')->get());
            $view->with('programmes', Programme::select('id', 'title', 'slug')->get());
            $view->with('presenters', Presenter::select('id', 'name', 'slug')->get());
            $view->with('tags', Tag::select('id', 'name', 'slug')->get());
        });

        // Comprehensive data for the Home Page
        view()->composer('site.pages.index', function ($view): void {
            $view->with('programmes', Programme::with(['media', 'programmeTimes'])->get());
            $view->with('categories', Category::with([
                'subcategories', 
                'media', 
                'posts' => fn ($query) => $query->with(['media', 'category'])->withCount('comments')->latest()
            ])->get());
            $view->with('songOfTheWeek', SongOfTheWeek::with(['media', 'description'])->currentSong()->first());
            $view->with('albums', Album::with('media')->orderBy('updated_at', 'desc')->take(6)->get());
            $view->with('posts', Post::with(['category', 'media', 'description'])->withCount('comments')->latest()->limit(6)->get());
        });

        // Data for Blog listing pages
        view()->composer([
            'site.pages.blog', 
            'site.pages.programmes.blog', 
            'site.pages.presenters.blog', 
            'site.pages.gallery.blog'
        ], function ($view): void {
            $view->with('categories', Category::select('id', 'name', 'slug')->get());
            $view->with('tags', Tag::select('id', 'name', 'slug')->get());
            $view->with('recents', Post::with(['category', 'media'])->latest()->limit(5)->get());
        });
    }
}
