<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\GoodsGroupRequest;
use App\Models\GoodsGroups;
use App\Models\GoodsGroup;
use App\Models\Category;
use Illuminate\Support\Collection;
use Image;
use Session;
use Search;
use Request;
use Illuminate\Http\Request as RequestIlluminate;

class GoodsGroupController extends Controller 
{
    public function getIndex(RequestIlluminate $request)
    {
        $query = $request->input('query');

        if(is_null($query) || empty($query))
        {
            $Groups = GoodsGroup::where('ids', Session::get('website'))
                ->orderBy('name', 'asc')
                ->paginate(15);

            return view("dashboard/goods_group/goods_group",['Groups' => $Groups ]);
        }
        else{
            $Groups = GoodsGroup::where('ids', Session::get('website'))
                ->where('name', 'LIKE', '%'.$query.'%')
                ->whereOr('title', 'LIKE', '%'.$query.'%')
                ->orderBy('name', 'asc')
                ->paginate(15);

            return view("dashboard/goods_group/goods_group",['Groups' => $Groups ]);
        }
    }


    public function getAdd($group_id = null)
    {
        // Группа
        $GoodsGroup = GoodsGroup::find($group_id);

        $Goods = new Collection();
        if ($GoodsGroup) {
            // Привязанные услуги
            $Goods = $GoodsGroup->goods()->get();
        }
        // Список категорий
        $Category = Category::where('ids', Session::get('website'))->get();

        return view("dashboard/goods_group/view",['GoodsGroup' => $GoodsGroup, 'Goods' => $Goods, 'Category' => $Category]);
    }


    //Добавление и изменение данных
    public function postIndex(GoodsGroupRequest $request)
    {
        if(!is_null($request->id))
            $GoodsGroup = GoodsGroup::find($request->id);
        else
            $GoodsGroup = new GoodsGroup();

        $GoodsGroup->title = $request->title;
        $GoodsGroup->name = $request->name;
        $GoodsGroup->slug = str_slug($request->name);
        $GoodsGroup->text = $request->text;
        $GoodsGroup->tag = $request->tag;

        if (Request::hasFile('avatar')) {
            Image::make(Request::file('avatar'))->save('upload/' . time() . '.' . Request::file('avatar')->getClientOriginalExtension());
            $GoodsGroup->avatar = '/upload/' . time() . '.' . Request::file('avatar')->getClientOriginalExtension();
        }elseif(is_null($GoodsGroup->avatar)){
            $GoodsGroup->avatar = '/dash/img/no_img.png';
        }

        //$Goods->id = $request->id;
        $GoodsGroup->descript = $request->descript;
        $GoodsGroup->ids = Session::get('website');
        $GoodsGroup->price = $request->price;
        $GoodsGroup->category_id = $request->category;
        $GoodsGroup->sort = $request->sort;

        if ($GoodsGroup->save()) {
            $this->bind_goods($request->good_ids, $GoodsGroup->id);

            //Флеш сообщение
            Session::flash('group', 'Вы успешно изменили значения');
        }

        return redirect()->route('goods_group');
    }

    protected function bind_goods($good_ids, $group_id) 
    {
        // Сначала, удаляем все старые записи
        GoodsGroups::where('good_group_id', $group_id)->delete();

        // Затем, привязываем новые
        foreach($good_ids as $key => $value) {
            $GoodsGroups = new GoodsGroups();
            $GoodsGroups->good_id = $value;
            $GoodsGroups->good_group_id = $group_id;
            $GoodsGroups->save();
        }
    }

    public function getRestore($Category = null)
    {
        Goods::withTrashed()->find($Category)->restore();

        Goods::fixTree();
        Session::flash('good', 'Вы успешно востановили запись');
        return redirect()->route('goods_group');
    }

    public function getTrash()
    {
        $GoodsGroup = GoodsGroup::onlyTrashed()->where('ids', Session::get('website'))->orderBy('id', 'desc')->paginate(15);
        return view("dashboard/goods_group/trash", ['GoodsGroup' => $GoodsGroup]);
    }

    //Удаление
    public function getDestroy($GoodsGroup = null)
    {
        $Category = GoodsGroup::find($GoodsGroup);
        $Category->delete('cascade');

        // Удаляем все привязки к группе
        GoodsGroups::where('good_group_id', $GoodsGroup)->delete();

        Session::flash('good_group', 'Вы успешно удалили значения');
        return redirect()->route('goods_group');
    }

    public  function  getUnset($GoodsGroup = null)
    {
        GoodsGroup::withTrashed()->find($GoodsGroup)->forceDelete();

        // Удаляем все привязки к группе
        GoodsGroups::where('good_group_id', $GoodsGroup)->delete();

        Session::flash('good_group', 'Вы успешно окончательно удалили запись');
        return redirect()->route('goods_group');
    }

    public  function  getCategory($GoodsGroup = null)
    {
        $GoodsGroup = Goods::whereRaw('ids =? and category_id =?', [Session::get('website'), $GoodsGroup])->orderBy('id', 'desc')->paginate(15);
        return view("dashboard/goods_group/goods_group",['GoodsGroup' => $GoodsGroup ]);
    }




}
