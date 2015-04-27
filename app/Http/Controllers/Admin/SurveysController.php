<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Survey;
use Request;
use Redirect;
use Validator;
use Session;
use Storage;


class SurveysController extends Controller {

    public function __construct()
    {
        //Тут должна быть проверка авторизации
        //$this->middleware('guest');
    }


    public function getIndex()
    {



        if (Storage::exists('MiD.xml'))
        {
            $xml = simplexml_load_string(Storage::get('MiD.xml'));
            //unset($xml->DATE);
            $xml = json_decode(json_encode($xml), TRUE);

            foreach($xml as $key => $value)
            {
                //Если это ебанный массив!!
                    if(is_array($value))
                    {

                        foreach( $value as $Podr )
                        {
                            echo "Это Подразделение: ". $Podr['PODRAZDELENIE'] ."<br>";
                            foreach($Podr['SPEC'] as $spec)
                            {
                                echo "Специализация: ". $spec['SPEC'] ."<br>";

                                    foreach ($spec['SOTRUDNIK'] as $sotrudnik) {
                                        if (is_array($sotrudnik)) {

                                            if(is_string($sotrudnik['KABINET'])) {
                                                echo "Это Кабинет: " . $sotrudnik['KABINET'] . "<br>";
                                                foreach ($sotrudnik['Talon'] as $talon) {
                                                    echo "С какого времени:" . $talon['S'] . "<br>";
                                                    echo "По какое временя:" . $talon['PO'] . "<br>";
                                                    echo "По какое временя:" . $talon['BUSY'] . "<br>";
                                                }
                                            }
                                            else
                                            {
                                                    dd()
                                            }
                                        }
                                        else {
                                            echo "Это Сотрудник: " . $sotrudnik . "<br>";
                                        }

                                }




                            }
                        }
                    }
                    else
                    {
                        echo "Это дата: ". $value ."<br>";
                    }



            }





            //dd($contents);
        }
        else
        {
            dd('нет');
        }

       // $Survey = Survey::where('ids', Session::get('website'))->orderBy('id', 'desc')->paginate(15);
        //return view("dashboard/surveys/surveys", ['Surveys' => $Survey]);
    }






}
