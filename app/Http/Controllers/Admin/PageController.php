<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PageRequest;
use App\Models\Page;
use Redirect;
use Request;
use Session;
use Validator;


class PageController extends Controller {

    public function __construct()
    {
        $this->middleware('auth');
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


    public function getTrash()
    {
        $PageList = Page::onlyTrashed()->where('ids', Session::get('website'))->orderBy('id', 'desc')->paginate(15);
        return view("dashboard/page/trash", ['PageList' => $PageList]);
    }


    public  function  getRestore($page = null)
    {
        Page::withTrashed()->find($page)->restore();
        Session::flash('good', 'Вы успешно востановили запись');
        return redirect()->route('page');
    }


    public  function  getUnset($page = null)
    {
        Page::withTrashed()->find($page)->forceDelete();
        Session::flash('good', 'Вы успешно окончательно удалили запись');
        return redirect()->route('page');
    }

    //Добовление и изменение данных
    public function postIndex(PageRequest $request)
    {

        if(!is_null($request->id))
            $page = Page::find($request->id);
        else
            $page = new Page();

        $page->title = $request->title;
        $page->name = $request->name;
        $page->content = $request->content;
        $page->tag = $request->tag;
        $page->descript = $request->descript;
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
