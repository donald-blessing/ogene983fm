<?php

declare(strict_types=1);

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegistrationFormRequest;
use App\Models\Registration\Registration;
use App\Models\User;
use App\Traits\ControllerTrait;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class UserRegistrationController extends Controller
{
    use ControllerTrait;

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(User $user)
    {
        $view = view('site.dashboard.user.registration.create', ['user' => $user->slug])->render();

        return response()->json(['modal' => $view], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(RegistrationFormRequest $request, User $user)
    {
        $request->flash();
        $request->validated();
        DB::beginTransaction();
        try {
            Registration::firstOrCreate([
                'registration_number' => $request->registration_number,
                'registration_body' => $request->registration_body,
                'country' => $request->registration_country,
                'user_id' => $user->id,
            ]);
        } catch (\Throwable $th) {
            DB::rollback();

            return response()->json(['message' => $th->getMessage()], 200);
        }
        DB::commit();
        $message = 'Registration was updated successfully';

        return response()->json(['message' => $message], 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return Response
     */
    public function edit(User $user, Registration $registration)
    {
        $view = view('site.dashboard.user.registration.edit', ['user' => $user, 'registration' => $registration])->render();

        return response()->json(['modal' => $view], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @return Response
     */
    public function update(RegistrationFormRequest $request, Registration $registration)
    {
        $request->flash();
        $request->validated();
        DB::beginTransaction();
        try {
            $registration->update([
                'registration_number' => $request->registration_number,
                'registration_body' => $request->registration_body,
                'country' => $request->registration_country,
            ]);
        } catch (\Throwable $th) {
            DB::rollback();
            throw $th;
        }
        DB::commit();
        session()->flash('success', 'Registration was updated successfully');

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return Response
     */
    public function destroy(Registration $registration)
    {
        DB::beginTransaction();
        try {
            $id = $registration->id;
            $registration = Registration::findOrFail($id);
            $registration->delete();
        } catch (\Throwable $th) {
            DB::rollback();
            throw $th;
        }
        DB::commit();
        session()->flash('success', 'Registration was deleted successfully!');

        return back();
    }
}
