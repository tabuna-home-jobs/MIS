<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\Site\AppointmentRequest;
use App\Models\Appointments;
use App\Models\TimeTable;
use DB;
use Illuminate\Http\Request;



class AppointmentsController extends Controller
{


    /**
     * @api {post} /api/appointment/store 'Записаться на приём'
     * @apiName postStore
     * @apiGroup Appointment
     *
     *
     * @apiDescription  Записаться на приём
     *
     * @apiParam {String} subdivision Место.
     * @apiParam {String} specialization Специализация.
     * @apiParam {String} name Имя врача.
     * @apiParam {String} apport Время.
     * @apiParam {String} firstname Имя пациента.
     * @apiParam {String} lastname Фамилия пациента
     * @apiParam {String} email Электронная почта .
     * @apiParam {String} phone Телефон.
     * @apiParam {String} comment Комментарий (Опционально).
     *
     * @param AppointmentRequest $request
     * @return \Illuminate\Http\Response|\Response
     */
    public function postStore(AppointmentRequest $request)
    {
        $beginning = strstr($request->apport, '|', true);
        $end = str_replace('|', '', strstr($request->apport, '|'));


        $timetable = TimeTable::whereRaw('subdivision = ? and specialization = ? and name = ?',
            [$request->subdivision, $request->specialization, $request->name])
            ->get();


        $record = [];
        foreach ($timetable as $specialTimeTable) {
            $record = DB::table('entry')->whereRaw('beginning = ? and timetable_id = ? and "end" = ?',
                [$beginning, $specialTimeTable->id, $end])
                ->first();
            if (!is_null($record)) {
                break;
            } else {
                $record->web_busy = true;
                $record->save();
            }
        }


        $appointments = new Appointments([
            'subdivision' => $request->subdivision,
            'specialization' => $request->specialization,
            'name' => $request->name,
            'beginning' => $beginning,
            'end' => $end,
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'phone' => $request->phone,
            'comment' => $request->comment,
            'spec_id' => $timetable->first()->id,
        ]);

        $appointments->save();

        return response(200);
    }




    /**
     * @return mixed
     */
    public function getPlace(){
        $place = DB::table('timetable')
            ->select('subdivision')
            ->distinct()
            ->orderBy('subdivision', 'ASC')
            ->get();

        $placeArray = [];

        foreach ($place as $item){
            if(!empty($item->subdivision))
                $placeArray[] = $item->subdivision;
        }

        return response()->json($placeArray);
    }



    /**
     * @api {get} /api/appointment/specialization 'Список специализаций врачей'
     * @apiName getAppointment
     * @apiGroup Appointment
     *
     * @apiDescription  Получить список специализаций, можно отсортировать по месту (place=)
     * Например: api/appointment/specialization?place=Политехническая
     *
     * @apiSuccess {String} specialization Название специализации.
     *
     *
     * @apiSuccessExample Успешный ответ:
     *     HTTP/1.1 200 OK
     *     {
     *      array
     *     }
     *
     */
    public function getSpecialization(Request $request)
    {
        if(!$request->has('place')) {
            $specialization = DB::table('timetable')
                ->select('specialization')
                ->distinct()
                ->orderBy('specialization', 'ASC')
                ->get();
        }else{
            $specialization = DB::table('timetable')
                ->select('specialization')
                ->where('subdivision', $request->get('place'))
                ->distinct()
                ->orderBy('specialization', 'ASC')
                ->get();
        }


        $specializationArray = [];

        foreach ($specialization as $item){
            if(!empty($item->specialization))
            $specializationArray[] = $item->specialization;
        }

        return response()->json($specializationArray);
    }



    /**
     *    /**
     * @api {get} /api/appointment/doctors 'Список врачей по специализации'
     * @apiName getDoctors
     * @apiGroup Appointment
     *
     * @apiDescription  Получить список специализаций, можно отсортировать по месту (place=)
     * Например: api/appointment/specialization?place=Политехническая
     *
     * @apiSuccess {String} specialization Название специализации.
     *
     *
     * @apiSuccessExample Успешный ответ:
     *     HTTP/1.1 200 OK
     *     {
     *      array
     *     }
     *
     *
     * @param $specialization
     * @return mixed
     */
    public function getDoctors(Request $request)
    {

            if ($request->has('specialization')) {
                $specialization = DB::table('timetable')
                    ->select('name')
                    ->whereRaw('specialization = ?', [$request->get('specialization')])
                    ->distinct()
                    ->orderBy('name', 'ASC')
                    ->get();

                $fio = [];
                foreach ($specialization as $item){
                    $fio[] = $item->name;
                }

            } elseif ($request->has('name')){
                $subdivision = DB::table('timetable')
                    ->select('name','subdivision')
                    ->whereRaw('name = ?', [$request->get('name')])
                    ->distinct()
                    ->orderBy('name', 'ASC')
                    ->get();

                $fio = [];
                foreach ($subdivision as $key => $value){
                    $fio[] = $value->subdivision;
                }
            }
            else {
                $names = DB::table('timetable')
                    ->select('name')
                    ->distinct()
                    ->orderBy('name', 'ASC')
                    ->get();

                $fio = [];
                foreach ($names as $item) {
                    $fio[] = $item->name;
                }
            }









        return response()->json($fio);
    }


    /**
     * @api {get} /api/appointment/time/:place/:specialization/:name 'Время приёма врача'
     * @apiName getTime
     * @apiGroup Appointment
     *

     *
     * @apiParam {String} place Место.
     * @apiParam {String} specialization Специализация.
     * @apiParam {String} name Имя врача.
     *

     * @param $place
     * @param $specialization
     * @param $fio
     * @return mixed
     */
    public function getTime($place, $specialization, $fio)
    {
        $doctor = TimeTable::whereRaw('subdivision = ? and specialization = ? and name = ?',
            [$place, $specialization, $fio])->first();

        $doctor = DB::table('entry')
            ->select('beginning', 'end')
            ->where('timetable_id', $doctor->id)
            ->where('upload', 'false')
            ->where('beginning', '>', time())
            ->whereRaw('subdivision = ?', [$place])
            ->whereRaw(' "1c_busy" = false and ("web_busy" is NULL or "web_busy" !=TRUE ) ')
            ->orderBy('beginning', 'ASC')
            ->get();

        $tmp = [];
        foreach ($doctor as $trip) {
            $trip->Shours = date('H', $trip->beginning);
            $trip->Sminute = date('i', $trip->beginning);
            $trip->Ehours = date('H', $trip->end);
            $trip->Eminute = date('i', $trip->end);
            $tmp[date('d.m.Y', $trip->beginning)][] = $trip;
        }


        return response()->json($tmp);
    }


    /**
     * @param Request $request
     * @return mixed
     */
    public function getIndex(Request $request)
    {

        if (!$request->has('specialization') && $request->has('fio')) {
            $place = TimeTable::whereRaw(' name = ?',
                [$request->get('fio')])->distinct()->orderBy('subdivision', 'ASC')->get();
        } elseif ($request->has('specialization') && !$request->has('fio')) {
            $place = TimeTable::whereRaw(' specialization = ?',
                [$request->get('specialization')])->distinct()->orderBy('subdivision', 'ASC')->get();
        } elseif ($request->has('specialization') && $request->has('fio')) {
            $place = TimeTable::whereRaw('specialization = ? and name = ?',
                [$request->has('specialization'), $request->has('fio')])->distinct()->orderBy('subdivision', 'ASC')->get();
        }else{
        $place = TimeTable::distinct()->orderBy('subdivision', 'ASC')->get();
        }

        return response()->json($place);
    }







}
