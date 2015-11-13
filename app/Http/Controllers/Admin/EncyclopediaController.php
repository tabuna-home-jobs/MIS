<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\EncyPostRequest;
use App\Models\EncyCategory;
use App\Models\EncyPost;
use App\Models\TimeTable;
use Cache;
use Image;
use Request;
use Session;

class EncyclopediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */


    public function index()
    {
        $listPost = EncyPost::with('Category')->orderBy('id', 'desc')->paginate(15);
        return view("dashboard/encyclopedia/post",['listPost' => $listPost ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $category = EncyCategory::lists('name','id')->all();
        $specdoctor = Cache::remember('TimeTableSpecialist', 10, function() {
            return TimeTable::distinct()->lists('specialization')->all();
        });

        return view("dashboard/encyclopedia/CreatePost",['category' => $category, 'specdoctor' =>$specdoctor ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(EncyPostRequest $request)
    {
        $Encypost = new EncyPost($request->all());
        $Encypost->pol = serialize($request->pol);
        if (Request::hasFile('avatar')) {
            Image::make(Request::file('avatar'))->save('upload/' . time() . '.' . Request::file('avatar')->getClientOriginalExtension());
            $Encypost->avatar = '/upload/' . time() . '.' . Request::file('avatar')->getClientOriginalExtension();
        }
        $Encypost->save();


        //Флеш сообщение
        Session::flash('good', 'Вы успешно добавили значения');
        return redirect()->route('dashboard.encyclopedia.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit(EncyPost $post)
    {
        $category = EncyCategory::lists('name','id')->all();
        $specdoctor = Cache::remember('TimeTableSpecialist', 10, function() {
            return TimeTable::distinct()->lists('specialization')->all();
        });

        return view("dashboard/encyclopedia/EditPost",['category' => $category, 'specdoctor' =>$specdoctor , 'post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(EncyPost $post, EncyPostRequest $request)
    {

        $post->fill($request->all());
        //dd($post);
        $post->pol = serialize($request->pol);
        //Пока оставлю так
        if (Request::hasFile('avatar')) {
            Image::make(Request::file('avatar'))->save('upload/' . time() . '.' . Request::file('avatar')->getClientOriginalExtension());
            $post->avatar = '/upload/' . time() . '.' . Request::file('avatar')->getClientOriginalExtension();
        }

        $post->save();

        //Флеш сообщение
        Session::flash('good', 'Вы успешно изменили значения');
        return redirect()->route('dashboard.encyclopedia.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(EncyPost $post)
    {
        $post->delete();
        Session::flash('good', 'Вы успешно удалили значения');
        return redirect()->route('dashboard.encyclopedia.index');
    }


}
