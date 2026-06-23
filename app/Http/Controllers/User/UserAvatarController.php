<?php

declare(strict_types=1);

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Traits\ControllerTrait;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UserAvatarController extends Controller
{
    use ControllerTrait;

    /**
     * Show the form for editing the specified resource.
     *
     * @return Response
     */
    public function edit(User $user)
    {
        $this->authorize('update', $user);

        return view('site.dashboard.user.profile-image.edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @return Response
     */
    public function update(Request $request, User $user)
    {
        $this->authorize('update', $user);

        $request->flash();
        $this->validate(
            $request,
            [
                'profile_image' => ['required', 'file', 'mimes:png,jpg,jpeg'],
            ]
        );

        try {
            $user->addMediaFromRequest('profile_image')
                ->toMediaCollection('avatars');
        } catch (\Throwable $th) {
            session()->flash('error', 'There was an error updating the profile image: '.$th->getMessage());

            return back();
        }

        session()->flash('success', 'Profile image was updated successfully');

        return redirect()->route('user.myProfile', ['user' => $user->slug]);
    }
}
