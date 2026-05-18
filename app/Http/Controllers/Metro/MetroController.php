<?php

declare(strict_types=1);

namespace App\Http\Controllers\Metro;

use App\Http\Controllers\Controller;
use App\Models\Category\Category;
use App\Models\Metro\Metro;
use Illuminate\Http\Response;

class MetroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $metros = Metro::with(['category', 'media', 'description'])->latest()->paginate(10);
        
        $routes = $metros->map(function ($metro) {
            return route('metro.show', ['category' => $metro->category->slug, 'metro' => $metro->slug]);
        })->toArray();

        return view('site.pages.blog', ['blogs' => $metros, 'routes' => $routes, 'title' => 'Metro News']);
    }

    /**
     * Display the specified resource.
     *
     * @return Response
     */
    public function category(Category $category)
    {
        $metros = $category->metros()->with(['category', 'media', 'description'])->latest()->paginate(10);
        
        $routes = $metros->map(function ($metro) {
            return route('metro.category', ['category' => $metro->category->slug]);
        })->toArray();

        return view('site.pages.blog', ['blogs' => $metros, 'routes' => $routes, 'title' => $category->name]);
    }

    /**
     * Display the specified resource.
     *
     * @return Response
     */
    public function show(Category $category, Metro $metro)
    {
        $categoryName = str($category->name)->title()->value();
        $title = $categoryName . ' - ' . str($metro->title)->title()->value();
        
        $breadcrumb['category'] = $categoryName;
        $breadcrumb['title'] = str($metro->title)->title()->value();
        $breadcrumb['route'] = route('metro.category', ['category' => $category->slug]);

        return view('site.pages.blog-details', ['blog' => $metro, 'breadcrumb' => $breadcrumb, 'category' => $category, 'title' => $title]);
    }
}
