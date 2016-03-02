<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\GoodsRequest;
use App\Models\Category;
use App\Models\Goods;
use Image;
use Request;
use Session;

class GoodsController extends Controller {


    public function getIndex()
    {
        Goods::fixTree();
        $Goods = Goods::where('ids', Session::get('website'))->orderBy('name', 'asc')->paginate(15);
        return view("dashboard/goods/goods",['Goods' => $Goods ]);
    }


    public function getAdd($Goods = null)
    {
        $Goods = Goods::find($Goods);
        $allGoods = Goods::where('ids', Session::get('website'))->orderBy('name', 'desc')->get();
        $Category = Category::where('ids', Session::get('website'))->get();
        //$Category = Category::all();
        return view("dashboard/goods/view",['Goods' => $Goods , 'Category' => $Category,'All'=>$allGoods]);
    }


    //Добовление и изменение данных
    public function postIndex(GoodsRequest $request)
    {


        if(!is_null($request->id))
            $Goods = Goods::find($request->id);
        else
            $Goods = new Goods();

        $Goods->title = $request->title;
        $Goods->name = $request->name;
        $Goods->text = $request->text;
        $Goods->tag = $request->tag;

        if (Request::hasFile('avatar')) {
            Image::make(Request::file('avatar'))->save('upload/' . time() . '.' . Request::file('avatar')->getClientOriginalExtension());
            $Goods->avatar = '/upload/' . time() . '.' . Request::file('avatar')->getClientOriginalExtension();
        }else{

            $Goods->avatar = '/dash/img/no_img.png';
        }

        //$Goods->id = $request->id;
        $Goods->descript = $request->descript;
        $Goods->ids = Session::get('website');
        $Goods->price = $request->price;
        $Goods->category_id = $request->category;
        $Goods->parent_id = $request->parent;
        $Goods->sort = $request->sort;

        if(!is_null($request->fieldsAttr))
        $Goods->attribute = serialize(array_filter($request->fieldsAttr));

        $Goods->save();

        //Флеш сообщение
        Session::flash('good', 'Вы успешно изменили значения');

        return redirect()->route('goods');
    }







    public  function  getRestore($Category = null)
    {
        Goods::withTrashed()->find($Category)->restore();
        Session::flash('good', 'Вы успешно востановили запись');
        return redirect()->route('goods');
    }

    public function getTrash()
    {
        $Goods = Goods::onlyTrashed()->where('ids', Session::get('website'))->orderBy('id', 'desc')->paginate(15);
        return view("dashboard/goods/trash", ['Goods' => $Goods]);
    }

    //Удаление
    public function getDestroy($Goods = null)
    {
        $Category = Goods::find($Goods);
        $Category->delete('cascade');
        Session::flash('good', 'Вы успешно удалили значения');
        return redirect()->route('goods');
    }

    public  function  getUnset($Goods = null)
    {
        Goods::withTrashed()->find($Goods)->forceDelete();
        Session::flash('good', 'Вы успешно окончательно удалили запись');
        return redirect()->route('goods');
    }



    public  function  getCategory($Goods = null)
    {
        $Goods = Goods::whereRaw('ids =? and category_id =?', [Session::get('website'), $Goods])->orderBy('id', 'desc')->paginate(15);
        return view("dashboard/goods/goods",['Goods' => $Goods ]);
    }




}
