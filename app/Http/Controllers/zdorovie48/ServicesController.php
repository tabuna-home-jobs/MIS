<?php namespace App\Http\Controllers\zdorovie48;

use App\Http\Controllers\Controller;
use App\Http\Requests\Site\CommentRequest;
use App\Models\Comments;
use App\Models\Sites;
use Request;
use Route;
use Session;

class ServicesController extends Controller
{

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



        return view('new'.$sitename.$sitedomen . '/service', [
            'thisCategory' => $Category,
            'Goods' => $Goods,
            'LastNews' => $getLastNews,
        ]);
        */


        $getSites = Sites::where('domen', '=', $sitename . "." . $sitedomen)->first();
        $Category = $getSites->getCategory()->get();

        $requestCategory = Request::input('category');
        $getLastNews = $getSites->getNews()->orderBy('id', 'desc')->limit(5)->get();


        if (is_null($requestCategory)) {
            $Goods = $getSites->getGoods()->paginate(9);
            $thisCategory = null;
        } else {
            $Goods = $getSites->getGoods()->where('category_id', $requestCategory)->orderBy('name', 'asc')->get();
            $thisCategory = $getSites->getCategory()->where('id', $requestCategory)->get()->first();
        }


        return view('new' . $sitename . $sitedomen . '/service', [
            'Category' => $Category,
            'Goods' => $Goods,
            'LastNews' => $getLastNews,
            'thisCategory' => $thisCategory,
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
    public function show($id, $sitename = 'zdorovie48', $sitedomen = 'ru')
    {
        $getSites = Sites::where('domen', '=', $sitename . "." . $sitedomen)->first();

        if (!empty(Route::getCurrentRoute()->parameterNames()) && Route::getCurrentRoute()->parameterNames()[0] == 'complex') {
            $data['Good'] = $getSites->getComplexGoods()->with('goods')->where('slug', $id)->first();
            $view = 'new' . $sitename . $sitedomen . '/goods_complex';
            //dd($data);
            $data['Good']->total_price = 0;

            foreach ($data['Good']->goods as $key => $value) {
                $data['Good']->goods[$key]->total_price = $value->count_visit * $value->price;
                $data['Good']->total_price += $data['Good']->goods[$key]->total_price;
            }

            if (!$data['Good']) {
                abort('404');
            }
        } else {
            if (intval($id) && (strlen($id) == strlen(intval($id)))) {
                $data['Good'] = $getSites->getGoods()->where('id', $id);
            } else {
                $data['Good'] = $getSites->getGoods()->with('complex_goods')->where('slug', $id);
            }

            $data['Good'] = $data['Good']->with('complex_goods')->first();

            if (!$data['Good']) {
                abort('404');
            }

            $data['Comments'] = $data['Good']->comments()->where('publish', true)->orderBy('fio',
                'asc')->simplepaginate(5);

            $view = 'new' . $sitename . $sitedomen . '/goods';
        }

        $data['Category'] = $getSites->getCategory()->findorFail($data['Good']->category_id);
        $data['Goods'] = $getSites->getGoods()->where('category_id', $data['Good']->category_id)->orderBy('name',
            'asc')->get();
        $data['complexGoods'] = $getSites->getComplexGoods()->where('category_id',
            $data['Good']->category_id)->orderBy('name', 'asc')->get();

        return view($view, $data);
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
