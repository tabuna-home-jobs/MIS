<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Articles;
use Image;
use Redirect;
use Request;
use Session;
use Validator;
use App\Http\Requests\ArtRequest;
use App\Services\Social;







class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $Articles = Articles::where('ids', Session::get('website'))->orderBy('id', 'desc')->paginate(15);
        return view("dashboard/Articles/art", ['Articles' => $Articles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view("dashboard/Articles/create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(ArtRequest $request)
    {
        $art = new Articles([
            'title'=>$request->title,
            'name'=>$request->name,
            'content'=>$request->content,
            'tag'=>$request->tag,
            'descript'=>$request->descript,
            'ids'=> Session::get('website'),
        ]);

        //���� ������� ���
        if (Request::hasFile('avatar')) {
            Image::make(Request::file('avatar'))->save('upload/' . time() . '.' . Request::file('avatar')->getClientOriginalExtension());
            $art->avatar = '/upload/' . time() . '.' . Request::file('avatar')->getClientOriginalExtension();
        }

        $art->save();





        /*
         * ��������
         */

        $Social = new Social([
            'descript' => $art->descript,
            'tag' => $art->tag,
            'image' => $art->avatar,
            'name' => $art->name,
            'type' => 'articles'
        ]);
        $Social->pushAll();


        //���� ���������
        Session::flash('good', '�� ������� �������� ��������');
        return redirect()->route('dashboard.art.index');
    }


    public function show($id)
    {
        //
    }


    public function edit(Articles $art)
    {
        return view("dashboard/Articles/edit", ['Articles' => $art ]);
    }


    public function update(Articles $art, ArtRequest $request)
    {
        $art->fill([
            'title'=>$request->title,
            'name'=>$request->name,
            'content'=>$request->content,
            'tag'=>$request->tag,
            'descript'=>$request->descript,
            'ids'=> Session::get('website'),
        ]);

        //���� ������� ���
        if (Request::hasFile('avatar')) {
            Image::make(Request::file('avatar'))->save('upload/' . time() . '.' . Request::file('avatar')->getClientOriginalExtension());
            $art->avatar = '/upload/' . time() . '.' . Request::file('avatar')->getClientOriginalExtension();
        }

        $art->save();

        //���� ���������
        Session::flash('good', '�� ������� �������� ��������');
        return redirect()->route('dashboard.art.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(Articles $art)
    {
        $art->delete();
        Session::flash('good', '�� ������� ������� ��������');
        return redirect()->route('dashboard.art.index');
    }
}
