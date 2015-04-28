<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Survey;
use Request;
use Redirect;
use Validator;
use Session;
use Storage;
use App\Console\Commands\AppointmentsCommand;

class SurveysController extends Controller {

    public function __construct()
    {
        //Тут должна быть проверка авторизации
        //$this->middleware('guest');
    }


    public function getIndex()
    {
        $Survey = Survey::where('ids', Session::get('website'))->orderBy('id', 'desc')->paginate(15);
        return view("dashboard/surveys/surveys", ['Surveys' => $Survey]);
    }






}
