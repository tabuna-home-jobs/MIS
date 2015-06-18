<?php namespace App\Http\Controllers\Admin;

use App\Console\Commands\AppointmentsCommand;
use App\Http\Controllers\Controller;
use App\Http\Requests\SurveysRequest;
use App\Models\Surveys;
use Redirect;
use Request;
use Session;

class SurveysController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getIndex()
    {
        $Survey = Surveys::where('ids', Session::get('website'))->orderBy('id', 'desc')->paginate(15);
        return view("dashboard/surveys/surveys", ['Surveys' => $Survey]);
    }


    public function getShow($id)
    {
        $quests = Surveys::whereRaw('ids =' . Session::get('website') . ' and id =' . $id)->first()->quest()->paginate(15);
        return view("dashboard/surveys/questions", ['quests' => $quests]);
    }



    public function postAdd(SurveysRequest $request)
    {
        $Survey = new Surveys([
            'name' => $request->name,
            'ids' => Session::get('website'),
        ]);
        $Survey->save();
        Session::flash('good', 'Вы успешно создали значения');
        return redirect()->route('surveys');
    }


    public function getDestroy($id)
    {
        $page = Surveys::find($id);
        $page->delete();
        Session::flash('good', 'Вы успешно удалили значения');
        return redirect()->route('surveys');
    }




}