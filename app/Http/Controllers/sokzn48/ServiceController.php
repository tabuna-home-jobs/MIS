<?php namespace App\Http\Controllers\sokzn48;

use App\Http\Controllers\Controller;
use App\Http\Requests\Site\CommentRequest;
use App\Models\Category as Cats;
use App\Models\Comments;
use App\Models\Sites;
use Request;
use Session;

class ServiceController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index($sitename = "sokzn48", $sitedomen = "ru")
    {




        $requestCategory = Request::input('category');
        $blue = "";
        if (is_null($requestCategory)) {

            $query = Sites::where('domen', '=', $sitename . "." . $sitedomen)->with(['categories' => function ($query) {
                $query->orderBy('id', 'ASC')->with(['goods' => function ($query) {

                    $query->where('parent_id',null)->orderBy('id', 'desc');
                }]);
            }])->first();
            //dd($query->categories);

        }else {

            $query = Sites::where('domen', '=', $sitename . "." . $sitedomen)->with(['categories' => function ($query) use ($requestCategory) {
                $query->where('id', $requestCategory)->orderBy('id', 'ASC')->with(['goods' => function ($query) {

                    $query->orderBy('id', 'desc');
                }]);
            }])->first();
            if( ($requestCategory % 2 ) == 1 ){
                $blue = "blue";
            }

        }

        $getSites = Sites::where('domen', '=', $sitename . "." . $sitedomen)->first();
        $getLastNews = $getSites->getNews()->orderBy('id', 'desc')->limit(3)->get();
        return view($sitename . $sitedomen . '/service', [
            'data' => $query->categories, 'LastNews' => $getLastNews, 'blue' => $blue
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
    public function store(CommentRequest $request, $sitename = "sokzn48", $sitedomen = "ru")
    {
        $getSites = Sites::where('domen', '=', $sitename . "." . $sitedomen)->first();

        $comment = new Comments([
            'fio' => $request->fio,
            'phone' => $request->phone,
            'email' => $request->email,
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
     * @param  int $id
     * @return Response
     */
    public function show($id, $sitename = "sokzn48", $sitedomen = "ru")
    {

        $getSites = Sites::where('domen', '=', $sitename . "." . $sitedomen)->first();

        $Goods = $getSites->getGoods()->where('id', $id)->first();
        $ChildGoods =$getSites->getGoods()->where('parent_id',$id)->get();
        $Category = $getSites->getCategory()->findorFail($Goods->category_id);

        $Comments = $Goods->comments()->where('publish', true)->orderBy('fio', 'asc')->simplepaginate(5);
        $GoodsCat = $getSites->getGoods()->where('category_id', $Goods->category_id)->orderBy('name', 'asc')->get();

        $getLastNews = $getSites->getNews()->orderBy('id', 'desc')->limit(3)->get();
        return view($sitename . $sitedomen . '/goods', [
            'Good' => $Goods,
            'Category' => $Category,
            'Goods' => $GoodsCat,
            'Comments' => $Comments,
            'ChildGoods' => $ChildGoods,
            'LastNews' => $getLastNews
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

}
