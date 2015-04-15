<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Shares;
use Request;
use Redirect;
use Validator;
use Session;



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
            $page = Shares::find($input['id']);
        else
            $page = new Shares();

        $page->title = $input['title'];
        $page->name = $input['name'];
        $page->content = $input['content'];
        $page->tag = $input['tag'];
        $page->descript = $input['descript'];
        $page->avatar = $input['avatar'];
        $page->start = $input['start'];
        $page->end = $input['end'];
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
