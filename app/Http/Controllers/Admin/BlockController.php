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
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $BlockList = Block::where('ids', Session::get('website'))->orderBy('id', 'desc')->paginate(15);
        return view("dashboard/block/blocks", ['BlockList' => $BlockList]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view("dashboard/block/create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(BlockRequest $request)
    {
        $block = new Block([
            'title'=>$request->title,
            'name'=>$request->name,
            'content'=>$request->content,
            'tag'=>$request->tag,
            'descript'=>$request->descript,
            'ids'=> Session::get('website'),
        ]);
        $block->save();

        //Флеш сообщение
        Session::flash('good', 'Вы успешно добавили значения');
        return redirect()->route('dashboard.block.index');
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit(Block $block)
    {
        return view("dashboard/block/edit", ['Block' => $block ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Block $block, BlockRequest $request)
    {
        $block->fill([
            'title'=>$request->title,
            'name'=>$request->name,
            'content'=>$request->content,
            'tag'=>$request->tag,
            'descript'=>$request->descript,
            'ids'=> Session::get('website'),
        ])->save();

        //Флеш сообщение
        Session::flash('good', 'Вы успешно изменили значения');
        return redirect()->route('dashboard.block.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(Block $block)
    {
        $block->delete();
        Session::flash('good', 'Вы успешно удалили значения');
        return redirect()->route('dashboard.block.index');
    }
}
