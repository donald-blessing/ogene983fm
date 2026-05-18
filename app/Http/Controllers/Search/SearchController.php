<?php

declare(strict_types=1);

namespace App\Http\Controllers\Search;

use App\Http\Controllers\Controller;
use App\Models\Category\Category;
use App\Models\Discussion\Discussion;
use App\Models\Gallery\Album;
use App\Models\Post\Post;
use App\Models\Presenter\Presenter;
use App\Models\Programme\Programme;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Spatie\Searchable\Search;

class SearchController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @return Response
     */
    public function show(Request $request)
    {
        $searchString = $request->search;

        $searchResults = (new Search)
            ->registerModel(Post::class, 'title')
            ->registerModel(Album::class, 'title')
            ->registerModel(Discussion::class, 'title')
            ->registerModel(Presenter::class, 'name')
            ->registerModel(Programme::class, 'title')
            ->registerModel(Category::class, 'name')
            ->search($searchString);

        $blogs = $searchResults->map(fn ($result) => $searchResult->searchable ?? $result->searchable);

        // The view site.pages.blog expects $blogs and $routes
        $routes = $searchResults->map(fn ($result) => $result->url);

        return view('site.pages.blog', [
            'blogs' => $blogs,
            'routes' => $routes,
            'title' => 'Search Results for: '.$searchString,
        ]);
    }
}
