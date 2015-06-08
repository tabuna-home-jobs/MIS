<?php namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Sites;
use Request;

class ServiceController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
    public function index($sitename, $sitedomen)
    {

        $getSites = Sites::where('domen', '=', $sitename . "." . $sitedomen)->first();
        $Category = $getSites->getCategory()->get();

        $requestCategory = Request::input('category');

        if (is_null($requestCategory))
            $Goods = $getSites->getGoods()->paginate(9);
        else
            $Goods = $getSites->getGoods()->where('category_id', $requestCategory)->paginate(9);

        return view($sitename . $sitedomen . '/service', ['Category' => $Category, 'Goods' => $Goods]);
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
    public function show($sitename, $sitedomen, $id)
	{
        $getSites = Sites::where('domen', '=', $sitename . "." . $sitedomen)->first();
        $Category = $getSites->getCategory()->get();
        $Goods = $getSites->getGoods()->where('id', $id)->first();
        $Comments = $Goods->comments()->where('publish', true)->orderBy('id', 'desc')->simplepaginate(5);
        return view($sitename . $sitedomen . '/goods', ['Category' => $Category, 'Goods' => $Goods, 'Comments' => $Comments]);
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
