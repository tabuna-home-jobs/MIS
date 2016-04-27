<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Block;
use App\Models\BlockItem;
use App\Http\Requests\BlockItemRequest;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\App;
use Image;
use Session;
use Search;
use Request;
use Illuminate\Http\Request as RequestIlluminate;

class BlockItemController extends Controller 
{
    /*
     * Список элементов блока
     */
    public function getIndex(\App\Models\Block $block)
    {
        dd($block);

        $items = BlockItem::where('ids', Session::get('website'))
            ->orderBy('name', 'asc')
            ->paginate(15);

        return view("dashboard/block/items/items",['items' => $items ]);
    }

    /*
     * Страница добавления элемента в блок
     */
    public function getAdd()
    {
        return view("dashboard/block/items/view");
    }

    /*
     * Добавление и изменение данных
     */
    public function postIndex(BlockItemRequest $request)
    {
        if(!is_null($request->id))
            $Item = BlockItem::find($request->id);
        else {
            $Item = new BlockItem();
            $Item->group_id = $request->group_id;
        }

        $Item->title = $request->title;
        $Item->name = $request->name;
        $Item->slug = str_slug($request->name);
        $Item->text = $request->text;

        if (Request::hasFile('avatar')) {
            Image::make(Request::file('avatar'))->save('upload/' . time() . '.' . Request::file('avatar')->getClientOriginalExtension());
            $Item->avatar = '/upload/' . time() . '.' . Request::file('avatar')->getClientOriginalExtension();
        }elseif(is_null($Item->avatar)){
            $Item->avatar = '/dash/img/no_img.png';
        }

        $Item->descript = $request->descript;
        $Item->ids = Session::get('website');
        $Item->sort = $request->sort;

        if ($Item->save()) {
            //Флеш сообщение
            Session::flash('group', 'Вы успешно изменили значения');
        }

        return redirect()->route('block_items');
    }

    /*
     * Удаление элемента блока
     */
    public function getDestroy($item_id = null)
    {
        $Item = BlockItem::find($item_id);
        $Item->delete('cascade');

        Session::flash('good_group', 'Вы успешно удалили значения');
        return redirect()->route('block_items');
    }

    /*
     * Окончательное удаление элемента блока
     */
    public  function  getUnset($GoodsGroup = null)
    {
        GoodsGroup::withTrashed()->find($GoodsGroup)->forceDelete();

        // Удаляем все привязки к группе
        GoodsGroups::where('good_group_id', $GoodsGroup)->delete();

        Session::flash('good_group', 'Вы успешно окончательно удалили запись');
        return redirect()->route('block_items');
    }
}
