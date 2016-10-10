<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TimeTable;

class AppointmentsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function getIndex()
    {
        $Calendar = array();
        foreach (TimeTable::all() as $time) {
            $test = $time->entry()->where('1c_busy', '=', 'false')->get();
            foreach ($test as $testing) {
                $Calendar[] = ([
                    'title' => $time->name,
                    'start' => $testing->beginning,
                    'end' => $testing->end,
                    'backgroundColor' => substr(md5($time->name), 0, 6),
                    'borderColor' => substr(md5($time->name), 6, 6),
                ]);
            }
        }
        return view("dashboard/calendar/view", ['Calendar' => $Calendar]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
