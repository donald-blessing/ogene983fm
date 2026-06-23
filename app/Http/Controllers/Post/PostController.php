<?php

declare(strict_types=1);

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Category\Category;
use App\Models\Post\Post;
use App\Services\LoyaltyService;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function __construct(
        protected LoyaltyService $loyaltyService
    ) {}

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $posts = Post::with(['category', 'media', 'description'])->latest()->paginate(10);

        $routes = $posts->map(function ($post) {
            return route('post.show', ['category' => $post->category->slug, 'post' => $post->slug]);
        })->toArray();

        return view('site.pages.blog', ['blogs' => $posts, 'routes' => $routes, 'title' => 'Blog']);
    }

    /**
     * Display the specified resource.
     *
     * @return Response
     */
    public function category(Category $category)
    {
        $posts = $category->posts()->with(['category', 'media', 'description'])->latest()->paginate(10);

        $routes = $posts->map(function ($post) {
            return route('post.category', ['category' => $post->category->slug]);
        })->toArray();

        return view('site.pages.blog', ['blogs' => $posts, 'routes' => $routes, 'title' => $category->name]);
    }

    /**
     * Display the specified resource.
     *
     * @return Response
     */
    public function show(Category $category, Post $post)
    {
        $this->authorize('view', $post);

        if (Auth::check()) {
            $this->loyaltyService->awardPostReadPoints(Auth::user(), $post->id);
        }

        // Use Laravel's string helper directly in view if needed, or format here
        $categoryName = str($category->name)->title()->value();
        $title = $categoryName.' - '.str($post->title)->title()->value();

        $breadcrumb['category'] = $categoryName;
        $breadcrumb['title'] = str($post->title)->title()->value();
        $breadcrumb['route'] = route('post.category', ['category' => $category->slug]);

        return view('site.pages.blog-details', ['blog' => $post, 'breadcrumb' => $breadcrumb, 'category' => $category, 'title' => $title]);
    }
}
