<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Monetization\Sponsorship;
use App\Models\Post\Post;
use App\Models\Programme\Programme;
use App\Models\User;
use Illuminate\Contracts\Support\Renderable;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function dashboard()
    {
        return view('site.dashboard.index', [
            'usersCount' => User::count(),
            'postsCount' => Post::count(),
            'programmesCount' => Programme::count(),
            'sponsorshipsCount' => Sponsorship::count(),
        ]);
    }

    /**
     * Show the application index.
     *
     * @return Renderable
     */
    public function index()
    {
        // Data is now handled by view composers in AppServiceProvider for better performance and consistency
        return view('site.pages.index');
    }

    /**
     * Show the live listening hub.
     *
     * @return Renderable
     */
    public function listen()
    {
        $today = now()->englishDayOfWeek;

        return view('site.pages.listen', [
            'onAirProgramme' => Programme::onAir()->with(['media', 'presenters.media'])->first(),
            'todaySchedule' => Programme::forDay($today)
                ->get()
                ->sortBy(fn (Programme $programme) => $programme->programmeTimes->first()?->from)
                ->values(),
        ]);
    }

    /**
     * Show the application about page.
     *
     * @return Renderable
     */
    public function about()
    {
        return view('site.pages.about');
    }

    /**
     * Show the application contact page.
     *
     * @return Renderable
     */
    public function contact()
    {
        return view('site.pages.contact');
    }
}
