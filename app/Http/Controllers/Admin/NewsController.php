<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Request;
use Redirect;
use Validator;
use Session;



class NewsController extends Controller {

    public function __construct()
    {
        //Тут должна быть проверка авторизации
        //$this->middleware('guest');
    }


    public function getIndex()
    {
        $NewsList = News::where('ids', Session::get('website'))->orderBy('id', 'desc')->paginate(15);
        return view("dashboard/news/news", ['NewsList' => $NewsList]);
    }

    public function getAdd($news = null)
    {
        $news = News::find($news);

        return view("dashboard/news/newsCrud", ['News' => $news ]);
    }

    //Добовление и изменение данных
    public function postIndex()
    {

        Validator::make(Request::all(), [
            'id' => 'integer',
            'title' => 'max:255',
            'name' => 'required|unique|max:255',
            'content' => 'required',
            'tag' => 'max:255',
            'descript' => 'max:255',
            'avatar' => 'max:255'
        ]);
        $input = Request::all();

        if(isset($input['id']))
            $news = News::find($input['id']);
        else
            $news = new News();

        $news->title = $input['title'];
        $news->name = $input['name'];
        $news->content = $input['content'];
        $news->tag = $input['tag'];
        $news->avatar = $input['avatar'];
        $news->descript = $input['descript'];
        $news->ids = Session::get('website');
        $news->save();

        //Флеш сообщение
        Session::flash('good', 'Вы успешно изменили значения');
        return redirect()->route('news');
    }



    //Удаление
    public function getDestroy($page = null)
    {
        $page = News::find($page);
        $page->delete();
        Session::flash('good', 'Вы успешно удалили значения');
        return redirect()->route('news');
    }




}
