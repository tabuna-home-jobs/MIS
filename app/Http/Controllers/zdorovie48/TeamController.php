<?php namespace App\Http\Controllers\zdorovie48;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Sites;
use App\Models\SpecCat;
use App\Models\Specialisty;
use App\Models\TimeTable;
use Cache;
use DB;
use Request;

class TeamController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index($sitename = 'zdorovie48', $sitedomen = 'ru')
    {
        $getSites = Sites::where('domen', '=', $sitename . "." . $sitedomen)->first();
        $SpecCat = $getSites->getSpecCat()->get();


        $requestCategory = Request::input('catspec');
        if (is_null($requestCategory)) {
            $Specialisty = $getSites->getTeam()->paginate();
        } else {
            $Specialisty = $getSites->getTeam()->where('cats', $requestCategory)->paginate();
        }
       //dd($getSites->getTeam()->orderBy('sort', 'asc')->limit(30)->get());

        return view('new' . $sitename . $sitedomen . '/team', ['Specialisty' => $Specialisty, 'SpCat' => $SpecCat]);
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
        /*
        $getSites = Sites::where('domen', '=', $sitename . "." . $sitedomen)->first();
        $Spec =Specialisty::where('ids', $getSites->id)->where('id', $id)->firstOrFail();


        $doctor = TimeTable::where('name', $Spec->fio)->distinct()->first();
        $timetable = Cache::remember('time-table-doctor-'.$Spec->id, 1, function () use ($doctor) {
            if (!is_null($doctor)) {
                $timetable = [];
                $doctor = DB::table('entry')
                    ->select('beginning', 'end','subdivision')
                    ->where('timetable_id', $doctor->id)
                    ->where('upload', 'false')
                    ->where('beginning', '>', time())
                    //->whereRaw('subdivision = ?', [$doctor->subdivision])
                    ->whereRaw(' "1c_busy" = false and ("web_busy" is NULL or "web_busy" !=TRUE ) ')
                    ->orderBy('beginning', 'ASC')
                    ->get();

                foreach ($doctor as $trip) {
                    $trip->Shours = date('H', $trip->beginning);
                    $trip->Sminute = date('i', $trip->beginning);
                    $trip->Ehours = date('H', $trip->end);
                    $trip->Eminute = date('i', $trip->end);
                    $timetable[date('d.m.Y', $trip->beginning)][] = $trip;
                }
                return $timetable;
            } else {
                return [];
            }

            /*
                   return [
            'subdivision' => 'required|exists:timetable',
            'specialization' => 'required|exists:timetable',
            'name' => 'required|exists:timetable',
            'apport' => 'required',
            'firstname' => 'required|max:255',
            'lastname' => 'required|max:255',
            'email' => 'required|email',
            'phone' => 'required|max:255',
            'comment' => '',
        ];
            */
        /*

                });



                dd($doctor,$timetable);

                $Collegi = Specialisty::
                where('ids', $getSites->id)
                    ->where('id', '!=', $Spec->id)
                    ->limit(5)
                    ->orderByRaw('RANDOM()')
                    ->get();

                return view('new'.$sitename.$sitedomen . '/person', [
                    'Collegi' => $Collegi,
                    'Spec' => $Spec,
                    'timetable' => $timetable,
                    'doctor' => $doctor
                ]);
            }
        */
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id, $sitename = 'zdorovie48', $sitedomen = 'ru')
    {
        $getSites = Sites::where('domen', '=', $sitename . "." . $sitedomen)->first();
        $Spec = Specialisty::where('ids', $getSites->id)->where('id', $id)->firstOrFail();


        $doctors = TimeTable::where('name', $Spec->fio)->distinct()->get();

        $timetable = [];

        foreach ($doctors as $doctor) {
            $timetable[$doctor->subdivision] = Cache::remember('time-table-doctor-' . $Spec->id . '-sub-' . $doctor->subdivision,
                1, function () use ($doctor) {

                    $doctor = DB::table('entry')
                        ->select('beginning', 'end', 'subdivision')
                        ->where('timetable_id', $doctor->id)
                        ->where('upload', 'false')
                        ->where('beginning', '>', time())
                        ->whereRaw('subdivision = ?', [$doctor->subdivision])
                        ->whereRaw(' "1c_busy" = false and ("web_busy" is NULL or "web_busy" !=TRUE ) ')
                        ->orderBy('beginning', 'ASC')
                        ->get();


                    $FoRtimetable = [];
                    foreach ($doctor as $trip) {
                        $trip->Shours = date('H', $trip->beginning);
                        $trip->Sminute = date('i', $trip->beginning);
                        $trip->Ehours = date('H', $trip->end);
                        $trip->Eminute = date('i', $trip->end);
                        $FoRtimetable[date('d.m.Y', $trip->beginning)][] = $trip;
                    }

                    return $FoRtimetable;
                    //Только первые 2 дня
                    //return array_slice($FoRtimetable, 0, 2);
                    /*
                           return [
                    'subdivision' => 'required|exists:timetable',
                    'specialization' => 'required|exists:timetable',
                    'name' => 'required|exists:timetable',
                    'apport' => 'required',
                    'firstname' => 'required|max:255',
                    'lastname' => 'required|max:255',
                    'email' => 'required|email',
                    'phone' => 'required|max:255',
                    'comment' => '',
                ];
                    */


                });
        }

        $Collegi = Specialisty::
        where('ids', $getSites->id)
            ->where('id', '!=', $Spec->id)
            ->limit(5)
            ->orderByRaw('RANDOM()')
            ->get();

        return view('new' . $sitename . $sitedomen . '/person', [
            'Collegi' => $Collegi,
            'Spec' => $Spec,
            'timetable' => $timetable,
            'doctor' => $doctors->first()
        ]);
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
