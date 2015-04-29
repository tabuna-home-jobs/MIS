<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Survey;
use Request;
use Redirect;
use Validator;
use Session;




//Удалить!
use Storage;
use App\Console\Commands\AppointmentsCommand;
use SMS;
use App\Models\Entry;
use App\Models\Timetable;


class SurveysController extends Controller {

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function getIndex()
    {

        if (Storage::exists('MiD.xml')) {

            $xml = simplexml_load_string(Storage::get('MiD.xml'));

            foreach ($xml->Record as $value) {


                //TimeTable::all()->delete();
                $TimeTable = new Timetable();
                $TimeTable->subdivision = $value->PODR;
                $TimeTable->specialization = $value->SPEC;
                $TimeTable->name = $value->SOTR;
                $TimeTable->cabinet = $value->KAB;
                $TimeTable->save();

                foreach($value->ZAPIS->T as $zapis)
                {
                    $entry = new Entry([
                        'beginning' => $zapis->attributes()->S,
                        'end' => $zapis->attributes()->PO,
                        '1c_busy' => $zapis->attributes()->BUSY,
                        'timetable_id' => $TimeTable->id
                    ]);
                    $TimeTable->entry()->save($entry);
                }
            }
            echo "Finish";

            //Storage::delete('MiD.xml');

        }
        else
        {
            dd('нет файла');
        }

        //$Survey = Survey::where('ids', Session::get('website'))->orderBy('id', 'desc')->paginate(15);
        //return view("dashboard/surveys/surveys", ['Surveys' => $Survey]);
    }






}
