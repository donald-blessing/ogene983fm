<?php

declare(strict_types=1);

namespace App\Http\Controllers\Discussion;

use App\Http\Controllers\Controller;
use App\Models\Discussion\Discussion;
use App\Models\Programme\Programme;
use Illuminate\Http\Response;

class DiscussionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $discussions = Discussion::with(['programme', 'media', 'description'])->latest()->paginate(10);
        
        $routes = $discussions->map(function ($discussion) {
            return route('discussion.show', ['programme' => $discussion->programme->slug, 'discussion' => $discussion->slug]);
        })->toArray();

        return view('site.pages.blog', ['blogs' => $discussions, 'routes' => $routes, 'title' => 'Today Show Discussions']);
    }

    /**
     * Display the specified resource.
     *
     * @return Response
     */
    public function programme(Programme $programme)
    {
        $discussions = $programme->discussions()->with(['programme', 'media', 'description'])->latest()->paginate(10);
        
        $routes = $discussions->map(function ($discussion) {
            return route('discussion.programme', ['programme' => $discussion->programme->slug]);
        })->toArray();

        return view('site.pages.blog', ['blogs' => $discussions, 'routes' => $routes, 'title' => $programme->title]);
    }

    /**
     * Display the specified resource.
     *
     * @return Response
     */
    public function show(Programme $programme, Discussion $discussion)
    {
        $programmeTitle = str($programme->title)->title()->value();
        $title = $programmeTitle . ' - ' . str($discussion->title)->title()->value();
        
        $breadcrumb['category'] = $programmeTitle;
        $breadcrumb['title'] = str($discussion->title)->title()->value();
        $breadcrumb['route'] = route('discussion.programme', ['programme' => $programme->slug]);

        return view('site.pages.blog-details', ['blog' => $discussion, 'breadcrumb' => $breadcrumb, 'category' => $programme, 'title' => $title]);
    }
}
