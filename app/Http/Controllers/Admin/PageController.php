<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Request;
use Redirect;
use Validator;
use Session;



class PageController extends Controller {

    public function __construct()
    {
        //Тут должна быть проверка авторизации
        //$this->middleware('guest');
    }


    public function getIndex()
    {
        $PageList = Page::where('ids', Session::get('website'))->orderBy('id', 'desc')->paginate(15);
        return view("dashboard/page/pages", ['PageList' => $PageList]);
    }

    public function getAdd($page = null)
    {
        $page = Page::find($page);

        return view("dashboard/page/pagesCrud", ['Page' => $page ]);
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
	    ]);
        $input = Request::all();

        if(isset($input['id']))
            $page = Page::find($input['id']);
        else
            $page = new Page();

        $page->title = $input['title'];
        $page->name = $input['name'];
        $page->content = $input['content'];
        $page->tag = $input['tag'];
        $page->descript = $input['descript'];
        $page->ids = Session::get('website');
        $page->save();

        //Флеш сообщение
        Session::flash('good', 'Вы успешно изменили значения');
        return redirect()->route('page');
    }



    //Удаление
    public function getDestroy($page = null)
    {
        $page = Page::find($page);
        $page->delete();
        Session::flash('good', 'Вы успешно удалили значения');
        return redirect()->route('page');
    }




}
