<?php

declare(strict_types=1);

namespace App\Http\Controllers\Presenter;

use App\Http\Controllers\Controller;
use App\Models\Presenter\Presenter;
use Illuminate\Http\Response;

class PresenterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $presenters = Presenter::with(['media', 'description', 'programmes.programmeTimes'])->get();

        return view('site.pages.presenters.blog', ['presenters' => $presenters, 'title' => 'On Air Personalities']);
    }

    /**
     * Display the specified resource.
     *
     * @return Response
     */
    public function show(Presenter $presenter)
    {
        $presenter->load(['media', 'description', 'programmes.programmeTimes']);

        return view('site.pages.presenters.profile', ['user' => $presenter]);
    }
}
