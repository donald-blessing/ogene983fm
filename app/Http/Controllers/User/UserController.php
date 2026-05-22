<?php

declare(strict_types=1);

namespace App\Http\Controllers\User;

use App\Charts\UserChart;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Traits\ChartTrait;
use App\Traits\ControllerTrait;
use Carbon\Carbon;
use F9Web\LaravelDeletable\Exceptions\NoneDeletableModel;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    use ChartTrait;
    use ControllerTrait;

    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware(['auth', 'role:super admin']);
    }

    public function getChart()
    {
        $usersChart = new UserChart;
        $usersChart->labels(['Total Members', 'Admins']);
        $usersChart->dataset('Members', 'line', [User::count(), User::admins()->count()]);

        return $usersChart;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $users = User::with(['description', 'media', 'roles'])->orderBy('created_at', 'desc')->get();

        return $this->displayIndex($users);
    }

    /**
     * Display a listing of users
     *
     * @return Factory|View
     */
    public function displayIndex($users)
    {
        return view('site.dashboard.user.index', ['users' => $users]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return Response
     */
    public function edit(User $user)
    {
        $user->load(['description', 'media']);

        return view('site.dashboard.user.page-user', ['user' => $user, 'mode' => 'edit']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  string  $user
     * @return Response
     */
    public function destroy($user)
    {
        DB::beginTransaction();
        try {
            $user = User::whereSlug($user)->firstOrFail();
            $user->delete();
        } catch (NoneDeletableModel $th) {
            DB::rollback();
            session()->flash('error', 'There was an error deleting the member!<br/>'.$th->getMessage());
        }
        DB::commit();
        session()->flash('success', 'Member was deleted successfully!');

        return back();
    }

    /**
     * Assign role to use
     *
     * @param  array  $role
     * @return Response
     */
    public function assignRole(User $user, $role)
    {
        DB::beginTransaction();
        try {
            $role = strtolower($role);
            if (\in_array($role, ['corporate', 'expert', 'regular'])) {
                $user->removeRole(['corporate', 'expert', 'regular']);
            }
            if (! $user->hasRole($role)) {
                $user = User::findOrFail($user->id);
                $role_r = Role::where('name', '=', $role)->firstOrFail();
                $user->assignRole($role_r); // Assigning role to user
            }
        } catch (\Throwable $th) {
            DB::rollback();
            throw $th;
        }
        DB::commit();
        $role = \ucfirst($role);
        session()->flash('success', "User has been assigned $role role successfully!");

        return back();
    }

    public function getUsersWithPermission($permissions)
    {
        $users = User::with(['description', 'media', 'roles'])->permission($permissions)->orderBy('created_at', 'desc')->get();

        return $this->displayIndex($users);
    }

    public function getUsersWithRoles($roles)
    {
        $users = User::with(['description', 'media', 'roles'])->role($roles)->orderBy('created_at', 'desc')->get();

        return $this->displayIndex($users);
    }

    /**
     * Revoke user permissions
     *
     * @param string/array $roles
     */
    public function revokeRoles(User $user, $roles)
    {
        $user->removeRole($roles); // Assigning role to user
    }

    public function upgradeMembership(User $user, $role)
    {
        DB::beginTransaction();
        try {
            $this->assignRole($user, $role);
        } catch (\Throwable $th) {
            DB::rollback();

            return response()->json(['message' => $th->getMessage()], 200);
        }
        DB::commit();
        $message = 'You have been upgraded to '.ucfirst((string) $role).' status successfully!';

        return response()->json(['message' => $message], 200);
    }

    /**
     * Get user
     *
     * @param  int  $user_id
     * @return User
     */
    public static function getUser(User $user)
    {
        return User::whereSlug($user->slug)->with(['description', 'media'])->firstOrFail();
    }

    /**
     * Mark user as verified
     *
     * @return RedirectResponse
     */
    public function verifyUser(User $user)
    {
        DB::beginTransaction();
        try {
            $user->update([
                'email_verified_at' => Carbon::now(),
            ]);
        } catch (\Throwable $th) {
            DB::rollback();
            session()->flash('error', 'There was an error verifying member!<br/>'.$th->getMessage());

            return back();
        }
        DB::commit();
        session()->flash('success', 'Member was verified successfully!');

        return back();
    }
}
