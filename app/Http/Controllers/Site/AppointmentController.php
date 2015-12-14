<?php namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Requests\Site\AppointmentRequest;
use App\Models\Appointments;
use App\Models\TimeTable;
use DB;
use Session;
use App\Models\Entry;

class AppointmentController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function getIndex($sitename, $sitedomen)
    {
        //Получить все места
        $specialization = DB::table('timetable')->select('specialization')->distinct()->get();
        return view($sitename . $sitedomen . '/appointment', ['specialization' => $specialization]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */

    public function postSpecial($sitename, $sitedomen, $place)
    {
        $specialization = DB::table('timetable')->select('specialization')->where('subdivision',$place)->distinct()->get();
        return response()->json($specialization);
    }


    public function postFio($sitename, $sitedomen,$specialization)
    {
        $fio = DB::table('timetable')->select('name')->whereRaw('specialization = ?',[$specialization])->distinct()->get();
        return response()->json($fio);
    }


    public function postTime($sitename, $sitedomen, $place, $specialization, $fio)
    {
        $doctor = TimeTable::whereRaw('subdivision = ? and specialization = ? and name = ?',[$place,$specialization,$fio])->first();
		$doctor = DB::table('entry')
				->select('beginning', 'end')
				->where('timetable_id', $doctor->id)
				->where('upload', 'false')
				->where('beginning', '>', time())
				->whereRaw(' "1c_busy" = false and ("web_busy" is NULL or "web_busy" !=TRUE ) ')
				->get();

		$tmp = [];
		foreach ($doctor as $trip) {
			$tmp[date('d.m.Y', $trip->beginning)][] = $trip;
		}

		return response()->json($tmp);
    }


	public function postPlace($sitename, $sitedomen, $specialization, $fio)
	{
		$place = TimeTable::whereRaw('specialization = ? and name = ?',[$specialization,$fio])->distinct()->get();
		return response()->json($place);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
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
			$record = Entry::whereRaw('beginning = ? and timetable_id = ? and "end" = ?', [$beginning, $specialTimeTable->id,$end])
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

        Session::flash('good', 'Вы успешно записались на приём');
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
