<?php namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Sites;
use App\Models\Category as Cats;
use Request;
use App\Models\Comments;
use App\Http\Requests\Site\CommentRequest;
use Session;
use Kalnoy\Nestedset\Collection as Colect;

class ServiceController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
    public function index($sitename, $sitedomen)
    {

        $getSites = Sites::where('domen', '=', $sitename . "." . $sitedomen)->first();




        $requestCategory = Request::input('category');

        $Category = $getSites->getCategory()->where('id',$requestCategory)->get();

        $getLastNews = $getSites->getNews()->orderBy('id', 'desc')->limit(5)->get();



        if (is_null($requestCategory))
            $Goods = $getSites->getGoods();
        else
            $Goods = $getSites->getGoods()->where('category_id', $requestCategory)->get();



        return view($sitename . $sitedomen . '/service', [
            'thisCategory' => $Category,
            'Goods' => $Goods,
            'LastNews' => $getLastNews,
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
	public function store($sitename, $sitedomen, CommentRequest $request)
	{
        $getSites = Sites::where('domen', '=', $sitename . "." . $sitedomen)->first();

        $comment = new Comments([
            'fio' => $request->fio,
            'phone'=> $request->phone,
            'email'=> $request->email,
            'content' => $request->comment,
            'comments_id' => 0, // Вложенные комментарии никому не нужны
            'goods_id' => $request->goods,
            'ids' => $getSites->id,
        ]);
        $comment->save();
        Session::flash('good', 'Спасибо, что написали, ваше сообщение будет опубликовано после модерации.');
        return redirect()->back();

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


        $getLastNews = $getSites->getNews()->orderBy('id', 'desc')->limit(5)->get();
        return view($sitename . $sitedomen . '/goods', ['Category' => $Category, 'Goods' => $Goods, 'Comments' => $Comments,  'LastNews' => $getLastNews]);
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
