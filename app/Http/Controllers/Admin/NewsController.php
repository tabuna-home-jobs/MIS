<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\News;
use Image;
use Redirect;
use Request;
use Session;
use Validator;
use App\Http\Requests\NewsRequest;
use App\Services\Social;







class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $NewsList = News::where('ids', Session::get('website'))->orderBy('id', 'desc')->paginate(15);
        return view("dashboard/news/news", ['NewsList' => $NewsList]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view("dashboard/news/create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(NewsRequest $request)
    {
        $news = new News([
            'title'=>$request->title,
            'name'=>$request->name,
            'content'=>$request->content,
            'tag'=>$request->tag,
            'descript'=>$request->descript,
            'ids'=> Session::get('website'),
        ]);

        //Пока оставлю так
        if (Request::hasFile('avatar')) {
            Image::make(Request::file('avatar'))->save('upload/' . time() . '.' . Request::file('avatar')->getClientOriginalExtension());
            $news->avatar = '/upload/' . time() . '.' . Request::file('avatar')->getClientOriginalExtension();
        }

        $news->save();





        /*
         * Социалки
         */

        $Social = new Social([
            'descript' => $news->descript,
            'tag' => $news->tag,
            'image' => $news->avatar,
            'name' => $news->name,
            'type' => 'news'
        ]);
        $Social->pushAll();


        //Флеш сообщение
        Session::flash('good', 'Вы успешно изменили значения');
        return redirect()->route('dashboard.news.index');
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
    public function edit(News $news)
    {
        return view("dashboard/news/edit", ['news' => $news ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(News $news, NewsRequest $request)
    {
        $news->fill([
            'title'=>$request->title,
            'name'=>$request->name,
            'content'=>$request->content,
            'tag'=>$request->tag,
            'descript'=>$request->descript,
            'ids'=> Session::get('website'),
        ]);

        //Пока оставлю так
        if (Request::hasFile('avatar')) {
            Image::make(Request::file('avatar'))->save('upload/' . time() . '.' . Request::file('avatar')->getClientOriginalExtension());
            $news->avatar = '/upload/' . time() . '.' . Request::file('avatar')->getClientOriginalExtension();
        }

        $news->save();

        //Флеш сообщение
        Session::flash('good', 'Вы успешно изменили значения');
        return redirect()->route('dashboard.news.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(News $news)
    {
        $news->delete();
        Session::flash('good', 'Вы успешно удалили значения');
        return redirect()->route('dashboard.news.index');
    }
}
