<?php namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Requests\Site\AppointmentRequest;
use App\Models\Appointments;
use App\Models\Entry;
use App\Models\TimeTable;
use DB;
use Session;

class AppointmentController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
	public function getIndex($sitename = 'zdorovie48', $sitedomen = 'ru')
    {
        //Получить все места
		$specialization = DB::table('timetable')->select('specialization')->distinct()->orderBy('specialization', 'ASC')->get();
        return view($sitename . $sitedomen . '/appointment', ['specialization' => $specialization]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */

	public function postSpecial($place, $sitename = 'zdorovie48', $sitedomen = 'ru')
    {
		$specialization = DB::table('timetable')->select('specialization')->where('subdivision', $place)->distinct()->orderBy('specialization', 'ASC')->get();
        return response()->json($specialization);
    }


	public function postFio($specialization, $sitename = 'zdorovie48', $sitedomen = 'ru')
    {
		$fio = DB::table('timetable')->select('name')->whereRaw('specialization = ?', [$specialization])->distinct()->orderBy('name', 'ASC')->get();
        return response()->json($fio);
    }


	public function postTime($place, $specialization, $fio, $sitename = 'zdorovie48', $sitedomen = 'ru')
    {
        $doctor = TimeTable::whereRaw('subdivision = ? and specialization = ? and name = ?',[$place,$specialization,$fio])->first();
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


	public function postPlace($specialization, $fio, $sitename = 'zdorovie48', $sitedomen = 'ru')
	{
		$place = TimeTable::whereRaw('specialization = ? and name = ?', [$specialization, $fio])->distinct()->orderBy('subdivision', 'ASC')->get();
		return response()->json($place);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
    public function postStore(AppointmentRequest $request)
	{
		/*
        $beginning = strstr($request->apport, '|', true);
        $end = str_replace('|', '', strstr($request->apport, '|'));


        $timetable = TimeTable::whereRaw('subdivision = ? and specialization = ? and name = ?',
            [$request->subdivision, $request->specialization, $request->name])
            ->get();



        $record = [];
        foreach ($timetable as $specialTimeTable) {
			$record = DB::table('entry')->whereRaw('beginning = ? and timetable_id = ? and "end" = ?', [$beginning, $specialTimeTable->id, $end])
					->first();
					if (!is_null($record)){
						break;
					}
					else
					{
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
*/
        Session::flash('good', ' Ваша запись является предварительной, с Вами свяжется сотрудник нашего центра и согласует окончательную дату приема!');
        return redirect()->back();
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
