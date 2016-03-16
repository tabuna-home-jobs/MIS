<?php namespace App\Http\Controllers\gkzn48;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Album;
use App\Models\Photo;
use App\Models\Sites;
use Illuminate\Http\Request;

class GalleryController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($sitename = 'gkzn48', $sitedomen = 'ru')
    {
        $getSites = Sites::where('domen', '=', $sitename . "." . $sitedomen)->first();
        $albums  =  $getSites->getAlbums()->select('*')->get();
        $photo = $getSites->getPhoto()->paginate(20);

        return view( $sitename.$sitedomen.'/gallery', [
                'albums' => $albums,
                'photos'  => $photo,
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
	public function show($id, $sitename = 'gkzn48', $sitedomen = 'ru')
	{
		$getSites = Sites::where('domen', '=', $sitename . "." . $sitedomen)->first();
		$albums  =  $getSites->getAlbums()->select('*')->get();
		$photo = $getSites->getPhoto()->where('album_id',$id)->paginate(20);

		return view( $sitename.$sitedomen.'/gallery', [
			'albums' => $albums,
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
