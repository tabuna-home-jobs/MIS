<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SharesRequest;
use App\Models\Shares;
use Redirect;
use Request;
use Session;
use Validator;


class SharesController extends Controller {

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function getIndex()
    {
        $SharesList = Shares::where('ids', Session::get('website'))->orderBy('id', 'desc')->paginate(15);
        return view("dashboard/shares/shares", ['SharesList' => $SharesList]);
    }

    public function getAdd($Shares = null)
    {
        $Shares = Shares::find($Shares);
        return view("dashboard/shares/sharesCrud", ['Shares' => $Shares ]);
    }

    //Добовление и изменение данных
    public function postIndex(SharesRequest $request)
    {

        if(!is_null($request->id))
            $page = Shares::find($request->id);
        else
            $page = new Shares();

        $page->title =$request->title;
        $page->name = $request->name;
        $page->content = $request->content;
        $page->tag = $request->tag;
        $page->descript = $request->descript;
        $page->avatar = $request->avatar;
        $page->start = $request->start;
        $page->end = $request->end;
        $page->ids = Session::get('website');
        $page->save();

        //Флеш сообщение
        Session::flash('good', 'Вы успешно изменили значения');
        return redirect()->route('share');
    }



    public function getTrash()
    {
        $PageList = Shares::onlyTrashed()->where('ids', Session::get('website'))->orderBy('id', 'desc')->paginate(15);
        return view("dashboard/page/trash", ['PageList' => $PageList]);
    }


    public  function  getRestore($page = null)
    {
        Shares::withTrashed()->find($page)->restore();
        Session::flash('good', 'Вы успешно востановили запись');
        return redirect()->route('page');
    }



    //Удаление
    public function getDestroy($page = null)
    {
        $page = Shares::find($page);
        $page->delete();
        Session::flash('good', 'Вы успешно удалили значения');
        return redirect()->route('share');
    }

    public  function  getUnset($page = null)
    {
        Shares::withTrashed()->find($page)->forceDelete();
        Session::flash('good', 'Вы успешно окончательно удалили запись');
        return redirect()->route('share');
    }


}
