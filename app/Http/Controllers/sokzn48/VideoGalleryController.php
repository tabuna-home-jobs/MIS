<?php

namespace App\Http\Controllers\sokzn48;

use App\Http\Controllers\Controller;
use App\Models\Sites as Sites;
use Illuminate\Http\Request;

class VideoGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($sitename = "sokzn48", $sitedomen = "ru")
    {
        $getSites = Sites::where('domen', '=', $sitename . "." . $sitedomen)->first();
        $albums = $getSites->getVideoAlbums()->select('*')->get();
        $video = $getSites->getVideo()->paginate(20);

        $getLastNews = $getSites->getNews()->orderBy('id', 'desc')->limit(3)->get();

        return view($sitename . $sitedomen . '/video', [
            'album' => $albums,
            'videos' => $video,
            'LastNews' => $getLastNews,
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
    public function show($id, $sitename = "sokzn48", $sitedomen = "ru")
    {
        $getSites = Sites::where('domen', '=', $sitename . "." . $sitedomen)->first();
        $albums = $getSites->getVideoAlbums()->select('*')->first();
        $video = $getSites->getVideo()->where('album_id', $id)->paginate(20);

        $getLastNews = $getSites->getNews()->orderBy('id', 'desc')->limit(3)->get();

        return view($sitename . $sitedomen . '/video', [
            'album' => $albums,
            'videos' => $video,
            'id' => $id,
            'LastNews' => $getLastNews
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
