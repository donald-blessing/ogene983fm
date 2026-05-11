<?php

namespace App\Http\Controllers\Search;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\Models\Category\Category;
use App\Models\Description\Description;
use App\Models\Discussion\Discussion;
use App\Models\Gallery\Album;
use App\Models\Post\Post;
use App\Models\Presenter\Presenter;
use App\Models\Programme\Programme;
use App\Models\Tag\Tag;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Spatie\Searchable\Search;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @return Response
     */
    public function show(Request $request)
    {
        $helper = new Helper;
        $searchString = $request->search;
        $result = collect();

        $albums = [];
        $discussions = [];
        $posts = [];
        $presenters = [];
        $programmes = [];

        $searchResults = (new Search)
            ->registerModel(Album::class, 'title')
            ->search($searchString);
        if ($searchResults->count() > 0) {
            foreach ($searchResults->groupByType() as $modelSearchResults) {
                foreach ($modelSearchResults as $searchResult) {
                    $albums[] = $searchResult->title;
                }
            }
        }

        $searchResults = (new Search)
            ->registerModel(Category::class, 'name')
            ->search($searchString);
        if ($searchResults->count() > 0) {
            $category = [];
            foreach ($searchResults->groupByType() as $modelSearchResults) {
                foreach ($modelSearchResults as $searchResult) {
                    $category[] = $searchResult->title;
                }
            }
            foreach ($category as $cat) {
                foreach ($cat->posts as $post) {
                    $posts[] = $post->id;
                }
            }
        }

        $searchResults = (new Search)
            ->registerModel(Description::class, 'body')
            ->search($searchString);
        if ($searchResults->count() > 0) {
            foreach ($searchResults->groupByType() as $modelSearchResults) {
                foreach ($modelSearchResults as $searchResult) {
                    $id = $searchResult->title;
                    $description = Description::find($id);
                    $described_type = $description->described_type;
                    $described_id = $description->described_id;

                    if ($helper->contains($described_type, 'album')) {
                        $album = Album::find($described_id);
                        $albums[] = $album->id;
                    }

                    if ($helper->contains($described_type, 'category')) {
                        $cat = Category::find($described_id);
                        foreach ($cat->posts as $post) {
                            $posts[] = $post->id;
                        }
                        foreach ($cat->albums as $album) {
                            $albums[] = $album->id;
                        }
                    }
                }
            }
        }

        $searchResults = (new Search)
            ->registerModel(Discussion::class, 'title')
            ->search($searchString);
        if ($searchResults->count() > 0) {
            foreach ($searchResults->groupByType() as $modelSearchResults) {
                foreach ($modelSearchResults as $searchResult) {
                    $discussions[] = $searchResult->title;
                }
            }
        }

        $searchResults = (new Search)
            ->registerModel(Post::class, 'title')
            ->search($searchString);
        if ($searchResults->count() > 0) {
            foreach ($searchResults->groupByType() as $modelSearchResults) {
                foreach ($modelSearchResults as $searchResult) {
                    $posts[] = $searchResult->title;
                }
            }
        }

        $searchResults = (new Search)
            ->registerModel(Presenter::class, 'name')
            ->search($searchString);
        if ($searchResults->count() > 0) {
            foreach ($searchResults->groupByType() as $modelSearchResults) {
                foreach ($modelSearchResults as $searchResult) {
                    $presenters[] = $searchResult->title;
                }
            }
        }

        $searchResults = (new Search)
            ->registerModel(Programme::class, 'title')
            ->search($searchString);
        if ($searchResults->count() > 0) {
            foreach ($searchResults->groupByType() as $modelSearchResults) {
                foreach ($modelSearchResults as $searchResult) {
                    $programmes[] = $searchResult->title;
                }
            }
        }

        $searchResults = (new Search)
            ->registerModel(Tag::class, 'name')
            ->search($searchString);
        if ($searchResults->count() > 0) {
            foreach ($searchResults->groupByType() as $modelSearchResults) {
                foreach ($modelSearchResults as $searchResult) {
                    $tag = Tag::find($searchResult->title);
                    foreach ($tag->albums as $key => $album) {
                        $albums[] = $album->id;
                    }
                    foreach ($tag->categories as $key => $category) {
                        $cat = Category::find($category->id);
                        foreach ($cat->posts() as $post) {
                            $posts[] = $post->id;
                        }
                        foreach ($cat->albums as $album) {
                            $albums[] = $album->id;
                        }
                    }
                    foreach ($tag->discussions as $discussion) {
                        $discussions[] = $discussion->id;
                    }
                    foreach ($tag->posts as $post) {
                        $posts[] = $post->id;
                    }
                    foreach ($tag->programmes as $programme) {
                        $programmes[] = $programme->id;
                    }
                }
            }
        }

        $routes = [];

        if (count($albums) > 0) {
            $albums = $helper->removeDuplicatesInArray($albums);
            $counter = count($albums);
            for ($i = 0; $i < $counter; $i++) {
                $albums[$i] = Album::find($albums[$i]);
                $result->push($albums[$i]);
            }
            $albums = collect($albums);
            foreach ($albums as $album) {
                $routes[] = route('gallery.album.show', ['album' => $album->slug]);
            }
        }

        if (count($discussions) > 0) {
            $discussions = $helper->removeDuplicatesInArray($discussions);
            $counter = count($discussions);
            for ($i = 0; $i < $counter; $i++) {
                $discussions[$i] = Discussion::find($discussions[$i]);
                $result->push($discussions[$i]);
            }
            $discussions = collect($discussions);
            foreach ($discussions as $discussion) {
                $routes[] = route('discussion.show', ['discussion' => $discussion->slug]);
            }
        }

        if (count($posts) > 0) {
            $posts = $helper->removeDuplicatesInArray($posts);
            $counter = count($posts);
            for ($i = 0; $i < $counter; $i++) {
                $posts[$i] = Post::find($posts[$i]);
                $result->push($posts[$i]);
            }
            $posts = collect($posts);
            foreach ($posts as $post) {
                $routes[] = route('post.show', ['category' => $category->slug, 'post' => $post->slug]);
            }
        }

        if (count($presenters) > 0) {
            $presenters = $helper->removeDuplicatesInArray($presenters);
            $counter = count($presenters);
            for ($i = 0; $i < $counter; $i++) {
                $presenters[$i] = Presenter::find($presenters[$i]);
                $result->push($presenters[$i]);
            }
            $presenters = collect($presenters);
            foreach ($presenters as $presenter) {
                $routes[] = route('presenter.show', ['presenter' => $presenter->slug]);
            }
        }

        if (count($programmes) > 0) {
            $programmes = $helper->removeDuplicatesInArray($programmes);
            $counter = count($programmes);
            for ($i = 0; $i < $counter; $i++) {
                $programmes[$i] = Programme::find($programmes[$i]);
                $result->push($programmes[$i]);
            }
            $discussions = collect($discussions);
            foreach ($programmes as $programme) {
                $routes[] = route('programme.show', ['programme' => $programme->slug]);
            }
        }

        // dd($result);

        return view('site.pages.blog', ['blogs' => $result, 'routes' => $routes, 'title' => 'Search']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
