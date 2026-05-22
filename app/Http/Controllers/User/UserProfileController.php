<?php

declare(strict_types=1);

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\UserUpgradeService;
use App\Traits\ChartTrait;
use App\Traits\ControllerTrait;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\View;

class UserProfileController extends Controller
{
    use ChartTrait;
    use ControllerTrait;

    public function __construct(protected UserUpgradeService $upgradeService) {}

    /**
     * Get member profile.
     *
     * @return Response
     */
    public function getProfile(User $user)
    {
        if ((Auth::id() != $user->id) && (! $user->is_admin && ! $user->is_super_admin)) {
            abort(404);
        }

        // Optimization: Eager load counts and relationships
        $user->loadCount(['programmes', 'posts', 'metroArticles']);
        $user->load(['description', 'media']);

        $items = [];

        if ($user->posts_count > 0) {
            $items[] = [
                'title' => 'Posts',
                'count' => $user->posts_count,
            ];
        }

        if ($user->programmes_count > 0) {
            $items[] = [
                'title' => 'Programmes',
                'count' => $user->programmes_count,
            ];
        }

        if ($user->metro_articles_count > 0) {
            $items[] = [
                'title' => 'Metro Articles',
                'count' => $user->metro_articles_count,
            ];
        }

        return view('site.dashboard.user.page-user', [
            'items' => collect($items),
            'charts' => $this->getChart($user),
            'user' => $user,
        ]);
    }

    public function updatePassword(Request $request)
    {
        $request->flash();
        $this->validate($request, [
            'old_password' => 'required',
            'new_password' => 'required|min:6',
            'confirm_password' => 'required|same:new_password',
        ]);

        /** @var User $user */
        $user = Auth::user();

        if (! Hash::check($request->old_password, $user->password)) {
            session()->flash('error', 'You have entered wrong password');

            return back();
        }

        DB::transaction(function () use ($user, $request): void {
            $user->update(['password' => $request->new_password]);
        });

        session()->flash('success', 'Your password was updated successfully!');

        return redirect()->route('dashboard');
    }

    public function changePassword()
    {
        return view('site.dashboard.user.change-password');
    }

    public function upgrade(User $user, $upgrade)
    {
        $urlPrevious = url()->previous();
        $urlBase = url()->to('/');

        if (($urlPrevious != $urlBase.'/login') && (str_starts_with($urlPrevious, $urlBase))) {
            session()->put('url.intended', $urlPrevious);
        }

        $forms = $this->upgradeService->getUpgradeForms($user, (string) $upgrade);

        return view('site.dashboard.user.upgrade', [
            'forms' => $forms,
            'user' => $user,
            'upgrade' => $upgrade,
            'intended' => redirect()->intended('/'),
        ]);
    }

    /**
     * Get the modal form of user profile
     *
     * @return Response
     */
    public function profileDialog(User $user)
    {
        if (View::exists('site.pages.user.profileModal')) {
            $user->load(['description', 'media']);
            $profile = view('site.pages.user.profileModal', ['user' => $user])->render();

            return response()->json([$profile], 200);
        }

        return response()->json(['error' => 'Profile modal not found'], 404);
    }

    /**
     * Display the specified resource.
     *
     * @return Response
     */
    public function show(User $user)
    {
        $user->load(['description', 'media']);

        return view('site.pages.user.profile', ['user' => $user]);
    }

    public function getChart(User $user)
    {
        return $this->getCharts($user);
    }
}
