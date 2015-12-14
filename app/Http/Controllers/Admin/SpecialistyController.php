<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SpecialRequest;
use App\Models\Specialisty;
use App\Models\SpecCat;
use Image;
use Redirect;
use Request;
use Session;
use Validator;

class SpecialistyController extends Controller
{

    public function category()
    {
        return view("dashboard/special/categorySpecial");
    }


    public function index()
    {
        $Specialisty = Specialisty::where('ids', Session::get('website'))->orderBy('id', 'desc')->get();
        return view("dashboard/special/special", ['Specialisty' => $Specialisty]);
    }

    public function create()
    {
        $SpecCat = SpecCat::where('ids', Session::get('website'))->orderBy('id', 'desc')->get();
        return view("dashboard/special/create",[
           'cats' => $SpecCat
        ]);
    }

    public function edit(Specialisty $Spec)
    {
        $SpecCat = SpecCat::where('ids', Session::get('website'))->orderBy('id', 'desc')->get();

        return view("dashboard/special/edit",['Spec'=>$Spec,'cats' => $SpecCat]);
    }


    public function store(SpecialRequest $request)
    {
        $special = new Specialisty([
                'fio' => $request->fio,
                'subname' => $request->subname,
                'special' => $request->special,
                'obrazovanie' => $request->obrazovanie,
                'opyt' => $request->opyt,
                'about' => $request->about,
                'works' => serialize($request->works),
                'cats' => $request->cats,
                'sort' => $request->sort,
                'ids' => Session::get('website'),
        ]);

        if (Request::hasFile('avatar')) {
            Image::make(Request::file('avatar'))->save('upload/' . time() . '.' . Request::file('avatar')->getClientOriginalExtension());
            $special->avatar = '/upload/' . time() . '.' . Request::file('avatar')->getClientOriginalExtension();
        }

        $special->save();

        //Флеш сообщение
        Session::flash('good', 'Вы успешно изменили значения');
        return redirect()->route('dashboard.special.index');
    }



    public function update(Specialisty $special, SpecialRequest $request)
    {

        $special->fill([
            'fio' => $request->fio,
            'subname' => $request->subname,
            'special' => $request->special,
            'obrazovanie' => $request->obrazovanie,
            'opyt' => $request->opyt,
            'about' => $request->about,
            'cats' => $request->cats,
            'works' => serialize($request->works),
            'ids' => Session::get('website'),
            'sort' => $request->sort,
        ]);

        if (Request::hasFile('avatar')) {
            Image::make(Request::file('avatar'))->save('upload/' . time() . '.' . Request::file('avatar')->getClientOriginalExtension());
            $special->avatar = '/upload/' . time() . '.' . Request::file('avatar')->getClientOriginalExtension();
        }

        $special->save();

        //Флеш сообщение
        Session::flash('good', 'Вы успешно изменили значения');
        return redirect()->route('dashboard.special.index');
    }




    //Удаление
    public function destroy(Specialisty $special)
    {
        $special->delete();
        Session::flash('good', 'Вы успешно удалили значения');
        return redirect()->route('dashboard.special.index');
    }


}
