<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comments;
use Session;
use App\Http\Requests\CommentsRequest;

class CommentsController extends Controller {

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function getIndex()
    {
        $Comments = Comments::where('ids', Session::get('website'))->orderBy('id', 'desc')->paginate(15);
        return view("dashboard/comments/comments",['Comments' => $Comments ]);
    }


    public function getAdd($Goods = null)
    {
        $Comments = Comments::find($Goods);
        return view("dashboard/comments/view",['Comments' => $Comments]);
    }


    //Добовление и изменение данных
    public function postIndex(CommentsRequest $request)
    {

        if(!is_null($request->id))
            $Comments = Comments::find($request->id);
        else
            $Comments = new Comments();

        $Comments->fio = $request->fio;
        $Comments->phone = $request->phone;
        $Comments->email = $request->email;
        $Comments->content = $request->content;
        $Comments->publish = $request->status;
        $Comments->save();

        //Флеш сообщение
        Session::flash('good', 'Вы успешно изменили значения');
        return redirect()->route('comments');
    }


    public  function  getRestore($Category = null)
    {
        Comments::withTrashed()->find($Category)->restore();
        Session::flash('good', 'Вы успешно востановили запись');
        return redirect()->route('comments');
    }

    public function getTrash()
    {
        $Comments = Comments::onlyTrashed()->where('ids', Session::get('website'))->orderBy('id', 'desc')->paginate(15);
        return view("dashboard/comments/trash", ['Comments' => $Comments]);
    }

    //Удаление
    public function getDestroy($Comments = null)
    {
        $Comments = Comments::find($Comments);
        $Comments->delete();
        Session::flash('good', 'Вы успешно удалили значения');
        return redirect()->route('comments');
    }

    public  function  getUnset($Comments = null)
    {
        Comments::withTrashed()->find($Comments)->forceDelete();
        Session::flash('good', 'Вы успешно окончательно удалили запись');
        return redirect()->route('comments');
    }





}
