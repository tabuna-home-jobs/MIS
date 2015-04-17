<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Shares;
use Request;
use Redirect;
use Validator;
use Session;
use App\Http\Requests\SharesRequest;


class SharesController extends Controller {

    public function __construct()
    {
        //Тут должна быть проверка авторизации
        //$this->middleware('guest');
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



    //Удаление
    public function getDestroy($page = null)
    {
        $page = Shares::find($page);
        $page->delete();
        Session::flash('good', 'Вы успешно удалили значения');
        return redirect()->route('share');
    }




}
