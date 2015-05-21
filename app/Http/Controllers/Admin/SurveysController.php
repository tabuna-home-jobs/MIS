<?php namespace App\Http\Controllers\Admin;

use App\Console\Commands\AppointmentsCommand;
use App\Http\Controllers\Controller;
use App\Http\Requests\SurveysRequest;
use App\Models\Survey;
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
        $Survey = Survey::where('ids', Session::get('website'))->orderBy('id', 'desc')->paginate(15);
        $Survey = Survey::all()->questions();
        //$Survey->questions()->get();
        dd($Survey);
        return view("dashboard/surveys/surveys", ['Surveys' => $Survey]);
    }


    public function postAdd(SurveysRequest $request)
    {
        $Survey = new Survey([
            'name' => $request->name,
            'ids' => Session::get('website'),
        ]);
        $Survey->save();
        Session::flash('good', 'Вы успешно создали значения');
        return redirect()->route('surveys');
    }


    public function getDestroy($id)
    {
        $page = Survey::find($id);
        $page->delete();
        Session::flash('good', 'Вы успешно удалили значения');
        return redirect()->route('surveys');
    }




}