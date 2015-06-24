<?php namespace App\Http\Controllers\Site;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\TimeTable;
use DB;
use Illuminate\Http\Request;

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
        $place = DB::table('timetable')->select('subdivision')->distinct()->get();
        return view($sitename . $sitedomen . '/appointment', ['place' => $place]);
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


    public function postFio($sitename, $sitedomen, $place,$specialization)
    {
        $fio = DB::table('timetable')->select('name')->whereRaw('subdivision = ? and specialization = ?',[$place, $specialization])->distinct()->get();
        return response()->json($fio);
    }


    public function postTime($sitename, $sitedomen, $place, $specialization, $fio)
    {
        $doctor = TimeTable::whereRaw('subdivision = ? and specialization = ? and name = ?',[$place,$specialization,$fio])->first();
        $doctor= $doctor->entry()->select('beginning','end')->where('1c_busy',false)->get();
        return response()->json($doctor);
    }


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function postStore()
	{
		dd('stop');
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
