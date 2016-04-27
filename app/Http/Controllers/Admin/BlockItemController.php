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
    public function getIndex(RequestIlluminate $request, Block $block)
    {
        $items = $block->items()->where('ids', Session::get('website'))->orderBy('name', 'desc')->paginate(15);

        return view("dashboard/block/items/items",['items' => $items, 'block' => $block]);
    }

    /*
     * Страница добавления элемента в блок
     */
    public function getAdd(Block $block, $item_id = NULL)
    {
        // Группа
        $item = BlockItem::find($item_id);

        return view("dashboard/block/items/view", ['item' => $item, 'block' => $block]);
    }

    /*
     * Добавление и изменение данных
     */
    public function postIndex(BlockItemRequest $request, Block $block)
    {
        if(!is_null($request->id)) {
            $Item = BlockItem::find($request->id);
        } else {
            $Item = new BlockItem();
            $Item->block_id = $block->id;
        }
            
        $Item->link = $request->link;
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
            // Флеш сообщение
            Session::flash('group', 'Вы успешно изменили элемент');
        }
        
        return redirect()->route('dashboard.block_items', $block->id);
    }

    /*
     * Удаление элемента блока
     */
    public function getDestroy(Block $block, $item_id = null)
    {
        $item = BlockItem::find($item_id);

        if ($item) {
            $item->forceDelete();
            Session::flash('good_group', 'Вы успешно удалили элемент');
        } else {
            Session::flash('bad', 'Элемент не найден');
        }

        return redirect()->route('dashboard.block_items', $block->id);
    }
}
