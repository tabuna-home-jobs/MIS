<?php namespace App\Http\Controllers\luchiki48;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Album;
use App\Models\Photo;
use Illuminate\Http\Request;
use App\Models\Sites;

class GalleryController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
    public function index($sitename = "luchiki48", $sitedomen = "ru")
    {
        $getSites = Sites::where('domen', '=', $sitename . "." . $sitedomen)->first();
        $albums  =  $getSites->getAlbums()->select('*')->get();
        $photo = $getSites->getPhoto()->paginate(20);

	    $videoAlbums  =  $getSites->getVideoAlbums()->select('*')->get();
	    $video  =  $getSites->getVideo()->select('*')->get();

        return view( $sitename.$sitedomen.'/gallery', [
                'albums' => $albums,
                'photos'  => $photo,
	           'videoalbums' => $videoAlbums,
		       'video' => $video
            ]);
    }
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id, $sitename = "luchiki48", $sitedomen = "ru")
	{
		$getSites = Sites::where('domen', '=', $sitename . "." . $sitedomen)->first();
		$album  =  $getSites->getAlbums()->where('id',$id)->select('name')->first();
		$photo = $getSites->getPhoto()->where('album_id',$id)->paginate(20);

		return view( $sitename.$sitedomen.'/gallerka', [
			'album' => $album,
			'photos'  => $photo,
			'id' =>$id
		]);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
