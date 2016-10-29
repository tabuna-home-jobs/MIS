<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\GoodsRequest;
use App\Http\Requests\SubGoodsRequest;
use App\Models\Category;
use App\Models\Goods;
use App\Models\SubGoods;
use Illuminate\Http\Request as RequestIlluminate;
use Image;
use Request;
use Search;
use Session;

class SubGoodsController extends Controller
{


    public function getIndex(RequestIlluminate $request)
    {
       
      
        $query = $request->input('query');
        if (is_null($query) || empty($query)) {
            $SubGoods = SubGoods::where('ids', Session::get('website'))
                ->orderBy('name', 'asc')
                ->paginate(15);
            return view("dashboard/subgoods/subgoods", ['SubGoods' => $SubGoods]);
        } else {
            $SubGoods = SubGoods::where('ids', Session::get('website'))
                ->where('name', 'LIKE', '%' . $query . '%')
                ->orderBy('name', 'asc')
                ->paginate(15);
            return view("dashboard/subgoods/subgoods", ['SubGoods' => $SubGoods]);
        }
    }


    public function getAdd($SubGoods = null)
    {
        $SubGoods = SubGoods::find($SubGoods);
        $allSubGoods = SubGoods::where('ids', Session::get('website'))->orderBy('name', 'desc')->get();
        $allGoods = Goods::where('ids', Session::get('website'))->orderBy('name', 'desc')->get();
        //$Category = Category::where('ids', Session::get('website'))->get();
        //$Category = Category::all();
        return view("dashboard/subgoods/view", ['SubGoods' => $SubGoods, 'AllGoods' => $allGoods, 'All' => $allSubGoods]);
    }


    //Добовление и изменение данных
    public function postIndex(SubGoodsRequest $request)
    {
        if (!is_null($request->id)) {
            $SubGoods = SubGoods::find($request->id);
        } else {
            $SubGoods = new SubGoods();
        }

        $SubGoods->name = $request->name;
        $time = time();

        if (Request::hasFile('avatar')) {
            Image::make(Request::file('avatar'))->save('upload/' . $time . '.' . Request::file('avatar')->getClientOriginalExtension());
            $SubGoods->avatar = '/upload/' . $time . '.' . Request::file('avatar')->getClientOriginalExtension();
        } elseif (is_null($SubGoods->avatar)) {
            $SubGoods->avatar = '/dash/img/no_img.png';
        }

        //$Goods->id = $request->id;
        $SubGoods->ids = Session::get('website');
        $SubGoods->price = $request->price;
        $SubGoods->parent_good_id = $request->parent_good_id;
        $SubGoods->sort = $request->sort;



        //dd($SubGoods);
        //SubGoods::fixTree();

        $SubGoods->save();

        //Флеш сообщение
        Session::flash('good', 'Вы успешно изменили значения');

        return redirect()->route('subgoods');
    }


    public function getRestore($ParentGood = null)
    {
        SubGoods::withTrashed()->find($ParentGood)->restore();

        //SubGoods::fixTree();
        Session::flash('good', 'Вы успешно востановили запись');
        return redirect()->route('subgoods');
    }

    public function getTrash()
    {
        $SubGoods = SubGoods::onlyTrashed()->where('ids', Session::get('website'))->orderBy('id', 'desc')->paginate(15);
        return view("dashboard/subgoods/trash", ['SubGoods' => $SubGoods]);
    }

    //Удаление
    public function getDestroy($SubGoods = null)
    {
        $Category = SubGoods::find($SubGoods);
        $Category->delete('cascade');

        //SubGoods::fixTree();
        Session::flash('good', 'Вы успешно удалили значения');
        return redirect()->route('subgoods');
    }

    public function getUnset($SubGoods = null)
    {
        SubGoods::withTrashed()->find($SubGoods)->forceDelete();

        //SubGoods::fixTree();
        Session::flash('good', 'Вы успешно окончательно удалили запись');
        return redirect()->route('subgoods');
    }


    public function getCategory($Goods = null)
    {
        $Goods = Goods::whereRaw('ids =? and category_id =?', [Session::get('website'), $Goods])->orderBy('id',
            'desc')->paginate(15);
        return view("dashboard/subgoods/subgoods", ['Goods' => $Goods]);
    }
}
