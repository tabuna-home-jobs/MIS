<?php

namespace App\Http\Controllers\Admin;

use App\Models\Block;
use Redirect;
use Request;
use Session;
use Validator;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\BlockRequest;

class BlockController extends Controller
{
    /**
     * Список блоков
     */
    public function index()
    {
        $items = Block::where('ids', Session::get('website'))->orderBy('id', 'desc')->paginate(15);
        return view("dashboard/block/blocks", ['items' => $items]);
    }

    /**
     * Страница создание блока
     */
    public function create()
    {
        return view("dashboard/block/create");
    }

    /**
     * Создание блока
     */
    public function store(BlockRequest $request)
    {
        if (!empty($request->slug)) {
            $slug = str_slug($request->slug);
        }
        else {
            $slug = str_slug($request->name);
        }

        if (Block::where('slug', $slug)->first()) {
            Session::flash('bad', 'Блок с указанным идентификатором уже существует');

            return redirect()->back()->withInput();
        } else {
            $block = new Block([
                'title'=>$request->title,
                'name'=>$request->name,
                'cont'=>$request->cont,
                'descript'=>$request->descript,
                'ids'=> Session::get('website'),
                'slug'=>$slug,
            ]);

            if ($block->save()) {
                // Флеш сообщение
                Session::flash('good', 'Вы успешно добавили значения');
            } else {
                Session::flash('bad', 'Ошибка добавления значений');
            }

            return redirect()->route('dashboard.block.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {

    }

    /**
     * Страница редактирования блока
     */
    public function edit(Block $block)
    {
        return view("dashboard/block/edit", ['Block' => $block ]);
    }

    /**
     * Редактирование блока
     */
    public function update(Block $block, BlockRequest $request)
    {
        if (!empty($request->slug)) {
            $slug = str_slug($request->slug);
        }
        else {
            $slug = str_slug($request->name);
        }

        if ($block->slug != $slug && Block::where('slug', $slug)->first()) {
            Session::flash('bad', 'Блок с указанным идентификатором уже существует');

            return redirect()->back()->withInput();
        } else {
            $block->fill([
                'title'=>$request->title,
                'name'=>$request->name,
                'cont'=>$request->cont,
                'slug'=>$slug,
                'descript'=>$request->descript,
                'ids'=> Session::get('website'),
            ])->save();

            // Флеш сообщение
            Session::flash('good', 'Вы успешно изменили значения');
        }

        return redirect()->route('dashboard.block.index');
    }

    /**
     * Удаление блока
     */
    public function destroy(Block $block)
    {
        $block->items()->forceDelete();
        $block->forceDelete();

        Session::flash('good', 'Вы успешно удалили значения');
        
        return redirect()->route('dashboard.block.index');
    }
}
