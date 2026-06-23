<?php

declare(strict_types=1);

namespace App\Http\Controllers\SongOfTheWeek;

use App\Http\Controllers\Controller;
use App\Models\SongOfTheWeek\SongOfTheWeek;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class SongOfTheWeekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function dashboard()
    {
        $songsOfTheWeek = SongOfTheWeek::all();

        return view('site.dashboard.songOfTheWeek.index', ['songsOfTheWeek' => $songsOfTheWeek]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $songsOfTheWeek = SongOfTheWeek::all();

        return view('site.pages.songOfTheWeek.index', ['songsOfTheWeek' => $songsOfTheWeek]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('site.dashboard.songOfTheWeek.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $request->flash();
        $this->validate($request, [
            'title' => ['required', 'string', 'max:190', 'unique:song_of_the_weeks,title'],
            'artist' => ['required', 'string', 'max:190'],
            'album' => ['required', 'string', 'max:190'],
            'about' => ['required', 'string'],
            'albumArt' => ['required', 'file', 'mimes:png,jpg,jpeg'],
            'song' => ['required', 'file', 'mimes:ogg,mp3,wav,wmv'],
        ]);
        DB::beginTransaction();
        try {
            $songOfTheWeek = new SongOfTheWeek;
            $songOfTheWeek->title = $request->title;
            $songOfTheWeek->artist = $request->artist;
            $songOfTheWeek->album = $request->album;

            // MediaLibrary will handle the file names and paths
            $songOfTheWeek->addMediaFromRequest('albumArt')->toMediaCollection('album_arts');
            $songOfTheWeek->addMediaFromRequest('song')->toMediaCollection('songs');

            $songOfTheWeek->save();
            $songOfTheWeek->storeAbout($request->about);
        } catch (\Throwable $th) {
            DB::rollback();
            throw $th;
        }
        DB::commit();
        alert()->success('The song was successfully uploaded!');

        return redirect()->route('songoftheweek.dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @return Response
     */
    public function show(SongOfTheWeek $songOfTheWeek)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return Response
     */
    public function edit(SongOfTheWeek $songOfTheWeek)
    {
        return view('site.dashboard.songOfTheWeek.edit', ['songOfTheWeek' => $songOfTheWeek]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @return Response
     */
    public function update(Request $request, SongOfTheWeek $songOfTheWeek)
    {
        $request->flash();
        $this->validate($request, [
            'title' => ['required', 'string', 'max:190', 'unique:song_of_the_weeks,title,'.$songOfTheWeek->id],
            'artist' => ['required', 'string', 'max:190'],
            'album' => ['required', 'string', 'max:190'],
            'about' => ['required', 'string'],
            'albumArt' => ['nullable', 'file', 'mimes:png,jpg,jpeg'],
            'song' => ['nullable', 'file', 'mimes:ogg,mp3,wav,wmv'],
        ]);
        DB::beginTransaction();
        try {
            $songOfTheWeek->title = $request->title;
            $songOfTheWeek->artist = $request->artist;
            $songOfTheWeek->album = $request->album;

            if ($request->hasFile('albumArt')) {
                $songOfTheWeek->addMediaFromRequest('albumArt')->toMediaCollection('album_arts');
            }

            if ($request->hasFile('song')) {
                $songOfTheWeek->addMediaFromRequest('song')->toMediaCollection('songs');
            }

            $songOfTheWeek->storeAbout($request->about);
            $songOfTheWeek->save();
        } catch (\Throwable $th) {
            DB::rollback();
            throw $th;
        }
        DB::commit();
        alert()->success('The song was successfully updated!');

        return redirect()->route('songoftheweek.dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return Response
     */
    public function destroy(SongOfTheWeek $songOfTheWeek)
    {
        DB::beginTransaction();
        try {
            // MediaLibrary automatically handles file deletion when the model is deleted or media is cleared
            $songOfTheWeek->deleteAbout();
            $songOfTheWeek->delete();
        } catch (\Throwable $th) {
            DB::rollback();
            throw $th;
        }
        DB::commit();
        alert()->success('The song was successfully deleted!');

        return redirect()->route('songoftheweek.dashboard');
    }
}
