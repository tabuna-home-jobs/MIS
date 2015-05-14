<?php namespace App\Http\Controllers\Admin;
use App\Console\Commands\AppointmentsCommand;
use App\Http\Controllers\Controller;
use App\Models\Survey;
use Redirect;
use Request;
use Session;
use SMS;
use Storage;
use Validator;

//Удалить!
class SurveysController extends Controller {
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function getIndex()
    {
        $Survey = Survey::where('ids', Session::get('website'))->orderBy('id', 'desc')->paginate(15);
        return view("dashboard/surveys/surveys", ['Surveys' => $Survey]);
    }
}