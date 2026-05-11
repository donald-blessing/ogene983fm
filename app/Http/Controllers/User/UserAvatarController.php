<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Traits\ControllerTrait;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

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
        return view('site.dashboard.user.profile-image.edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @return Response
     */
    public function update(Request $request, User $user)
    {
        $request->flash();
        $this->validate(
            $request,
            [
                'profile_image' => ['required', 'file', 'mimes:png,jpg,jpeg'],
            ]
        );
        DB::beginTransaction();
        try {
            $user = User::findOrFail($user->id);
            $media = $user->getMedia('profile_image');
            if ($media) {
                foreach ($media as $item) {
                    $mediaItem = Media::findOrFail($item->id);
                    $mediaItem->delete();
                }
            }
            $user->uploadMedia($request->file('profile_image'), 'profile_image');
        } catch (\Throwable $th) {
            DB::rollback();
            throw $th;
        }
        DB::commit();
        session()->flash('success', 'Profile image was updated successfully');

        return redirect()->route('user.myProfile', ['user' => $user->slug]);
    }
}
