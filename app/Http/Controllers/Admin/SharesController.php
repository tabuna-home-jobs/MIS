<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SharesRequest;
use App\Models\Shares;
use Image;
use Redirect;
use Request;
use Session;
use Validator;

class SharesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $SharesList = Shares::where('ids', Session::get('website'))->orderBy('id', 'desc')->paginate(15);
        return view("dashboard/shares/shares", ['SharesList' => $SharesList]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view("dashboard/shares/create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(SharesRequest $request)
    {
        $shares = new Shares([
            'title' => $request->title,
            'name' => $request->name,
            'content' => $request->content,
            'tag' => $request->tag,
            'descript' => $request->descript,
            'start' => $request->start,
            'end' => $request->end,
            'ids' => Session::get('website'),
        ]);

        if (Request::hasFile('avatar')) {
            Image::make(Request::file('avatar'))->save('upload/' . time() . '.' . Request::file('avatar')->getClientOriginalExtension());
            $shares->avatar = '/upload/' . time() . '.' . Request::file('avatar')->getClientOriginalExtension();
        }

        $shares->save();

        //Флеш сообщение
        Session::flash('good', 'Вы успешно добавили значения');
        return redirect()->route('dashboard.shares.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit(Shares $shares)
    {
        return view("dashboard/shares/edit", ['Shares' => $shares]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update(SharesRequest $request, Shares $shares)
    {
        //$sahres->fill($request->all());

        $shares->fill([
            'title' => $request->title,
            'name' => $request->name,
            'content' => $request->content,
            'tag' => $request->tag,
            'descript' => $request->descript,
            'start' => $request->start,
            'end' => $request->end,
            'ids' => Session::get('website'),
        ]);
		//dd(Request::hasFile('avatar'));
        if (Request::hasFile('avatar')) {
            Image::make(Request::file('avatar'))->save('upload/' . time() . '.' . Request::file('avatar')->getClientOriginalExtension());
            $shares->avatar = '/upload/' . time() . '.' . Request::file('avatar')->getClientOriginalExtension();
        }

        $shares->save();

        //Флеш сообщение
        Session::flash('good', 'Вы успешно изменили значения');
        return redirect()->route('dashboard.shares.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy(Shares $shares)
    {
        $shares->delete();
        Session::flash('good', 'Вы успешно удалили значения');
        return redirect()->route('dashboard.shares.index');
    }
}
