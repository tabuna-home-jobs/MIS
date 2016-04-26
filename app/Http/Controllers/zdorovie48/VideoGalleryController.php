<?php

namespace App\Http\Controllers\zdorovie48;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Sites as Sites;
use Illuminate\Http\Request;

class VideoGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($sitename = 'zdorovie48', $sitedomen = 'ru')
    {
        $getSites = Sites::where('domen', '=', $sitename . "." . $sitedomen)->first();
        $albums = $getSites->getVideoAlbums()->select('*')->get();
        $video = $getSites->getVideo()->paginate(20);

        return view('new' . $sitename . $sitedomen . '/video', [
            'albums' => $albums,
            'videos' => $video,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($sitename = 'zdorovie48', $sitedomen = 'ru', $id)
    {
        $getSites = Sites::where('domen', '=', $sitename . "." . $sitedomen)->first();
        $albums = $getSites->getVideoAlbums()->select('*')->get();
        $video = $getSites->getVideo()->where('album_id', $id)->paginate(20);

        return view('new' . $sitename . $sitedomen . '/video', [
            'albums' => $albums,
            'videos' => $video,
            'id' => $id
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
