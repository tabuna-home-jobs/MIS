<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SpecialRequest;
use App\Models\Specialisty;
use Image;
use Redirect;
use Request;
use Session;
use Validator;

class SpecialistyController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getIndex()
    {
        $Specialisty = Specialisty::where('ids', Session::get('website'))->orderBy('id', 'desc')->paginate(15);
        return view("dashboard/special/special", ['Specialisty' => $Specialisty]);
    }

    public function getAdd($Spec = null)
    {
        $Spec = Specialisty::find($Spec);
        return view("dashboard/special/specialCrud", ['Spec' => $Spec]);
    }


    public function getTrash()
    {
        $Specialisty = Specialisty::onlyTrashed()->where('ids', Session::get('website'))->orderBy('id', 'desc')->paginate(15);
        return view("dashboard/special/trash", ['Specialisty' => $Specialisty]);
    }


    public function  getRestore($Spec = null)
    {
        Specialisty::withTrashed()->find($Spec)->restore();
        Session::flash('good', 'Вы успешно востановили запись');
        return redirect()->route('special');
    }


    public function  getUnset($Spec = null)
    {
        Specialisty::withTrashed()->find($Spec)->forceDelete();
        Session::flash('good', 'Вы успешно окончательно удалили запись');
        return redirect()->route('special');
    }

    //Добовление и изменение данных
    public function postIndex(SpecialRequest $request)
    {
        if (!is_null($request->id))
            $special = Specialisty::find($request->id);
        else
            $special = new Specialisty();

        $special->fio = $request->fio;
        $special->subname = $request->subname;
        $special->special = $request->special;
        $special->obrazovanie = $request->obrazovanie;
        $special->opyt = $request->opyt;
        $special->about = $request->about;
        $special->works = serialize($request->works);
        $special->ids = Session::get('website');


        if (Request::hasFile('avatar')) {
            Image::make(Request::file('avatar'))->resize(300, 200)->save('upload/' . time() . '.' . Request::file('avatar')->getClientOriginalExtension());
            $special->avatar = '/upload/' . time() . '.' . Request::file('avatar')->getClientOriginalExtension();
        }

        $special->save();

        //Флеш сообщение
        Session::flash('good', 'Вы успешно изменили значения');
        return redirect()->back();
    }


    //Удаление
    public function getDestroy($special = null)
    {
        $special = Specialisty::find($special);
        $special->delete();
        Session::flash('good', 'Вы успешно удалили значения');
        return redirect()->back();
    }


}
