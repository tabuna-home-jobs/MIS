<?php namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\Site\CommentRequest;
use App\Models\Category as Cats;
use App\Models\Comments;
use App\Models\Sites;
use Request;
use Session;

class ServicesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($sitename = 'zdorovie48', $sitedomen = 'ru')
    {
		/*

        $getSites = Sites::where('domen', '=', $sitename . "." . $sitedomen)->first();




        $requestCategory = Request::input('category');
        $Category = $getSites->getCategory()->where('id',$requestCategory)->orderBy('name','desc')->get();
        $getLastNews = $getSites->getNews()->orderBy('name', 'asc')->limit(5)->get();



        if (is_null($requestCategory))
            $Goods = $getSites->getGoods();
        else
            $Goods = $getSites->getGoods()->where('category_id', $requestCategory)->orderBy('name','asc')->get();



        return view($sitename . $sitedomen . '/service', [
            'thisCategory' => $Category,
            'Goods' => $Goods,
            'LastNews' => $getLastNews,
        ]);
		*/



		$getSites = Sites::where('domen', '=', $sitename . "." . $sitedomen)->first();
		$Category = $getSites->getCategory()->get();

		$requestCategory = Request::input('category');
		$getLastNews = $getSites->getNews()->orderBy('id', 'desc')->limit(5)->get();



		if (is_null($requestCategory))
			$Goods = $getSites->getGoods()->paginate(9);
		else
			$Goods = $getSites->getGoods()->where('category_id', $requestCategory)->paginate(9);

		return view($sitename . $sitedomen . '/service', [
				'Category' => $Category,
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
	public function store(CommentRequest $request, $sitename = 'zdorovie48', $sitedomen = 'ru')
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
	public function show($id, $sitename = 'zdorovie48', $sitedomen = 'ru')
	{

        $getSites = Sites::where('domen', '=', $sitename . "." . $sitedomen)->first();

        $Goods = $getSites->getGoods()->where('id', $id)->first();
        $Category = $getSites->getCategory()->findorFail($Goods->category_id);

        $Comments = $Goods->comments()->where('publish', true)->orderBy('fio', 'asc')->simplepaginate(5);
        $GoodsCat = $getSites->getGoods()->where('category_id', $Goods->category_id)->orderBy('name','asc')->get();

        $getLastNews = $getSites->getNews()->orderBy('id', 'desc')->limit(5)->get();
        return view($sitename . $sitedomen . '/goods', ['Good' => $Goods,'Category' => $Category, 'Goods' => $GoodsCat, 'Comments' => $Comments,  'LastNews' => $getLastNews]);
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
