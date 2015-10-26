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


    public function index()
    {
        $Specialisty = Specialisty::where('ids', Session::get('website'))->orderBy('id', 'desc')->paginate(15);
        return view("dashboard/special/special", ['Specialisty' => $Specialisty]);
    }

    public function create()
    {
        return view("dashboard/special/create");
    }

    public function edit(Specialisty $Spec)
    {
        return view("dashboard/special/create",['Spec'=>$Spec]);
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
                'ids' => Session::get('website'),
        ]);

        if (Request::hasFile('avatar')) {
            Image::make(Request::file('avatar'))->resize(300, 200)->save('upload/' . time() . '.' . Request::file('avatar')->getClientOriginalExtension());
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
            'works' => serialize($request->works),
            'ids' => Session::get('website'),
        ]);

        if (Request::hasFile('avatar')) {
            Image::make(Request::file('avatar'))->resize(300, 200)->save('upload/' . time() . '.' . Request::file('avatar')->getClientOriginalExtension());
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
