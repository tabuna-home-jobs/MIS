<?php namespace App\Http\Controllers\zdorovie48;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Page as Page;
use App\Models\Sites;
use DB;
use Request;

class HomeController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index($sitename = 'zdorovie48', $sitedomen = 'ru')
    {
        $getSites = Sites::where('domen', '=', $sitename . "." . $sitedomen)->first();
        $getNews = $getSites->getNews()->orderBy('updated_at', 'desc')->limit(4)->get();
        $getShare = $getSites->getShares()
            ->select('name')
            ->limit(1)
            ->orderByRaw('RANDOM()')
            ->first();




        $specialization = DB::table('timetable')->select('specialization')->distinct()->get();
        return view('new' . $sitename . $sitedomen . '/index', [
            'getNews' => $getNews,
            'getShare' => $getShare,
            'specialization' => $specialization,

        ]);
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
