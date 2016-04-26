<?php namespace App\Http\Controllers\cozn48;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Sites;
use App\Models\SpecCat;
use Request;

class TeamController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index($sitename = 'cozn48', $sitedomen = 'ru')
    {
        $getSites = Sites::where('domen', '=', $sitename . "." . $sitedomen)->first();
        //$Specialisty = $getSites->getTeam()->orderBy('sort', 'desc')->paginate(6);
        $SpecCat = $getSites->getSpecCat()->get();


        $requestCategory = Request::input('catspec');
        if (is_null($requestCategory)) {
            $Specialisty = $getSites->getTeam()->orderBy('sort', 'asc')->paginate(9);
        } else {
            $Specialisty = $getSites->getTeam()->where('cats', $requestCategory)->orderBy('sort', 'asc')->paginate(8);
        }

        //dd($requestCategory);
        return view($sitename . $sitedomen . '/team', ['Specialisty' => $Specialisty, 'SpCat' => $SpecCat]);
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
    public function show($id, $sitename = "cozn48", $sitedomen = "ru")
    {
        $getSites = Sites::where('domen', '=', $sitename . "." . $sitedomen)->first();

        $Specialist = $getSites->allspecs()->where('id', $id)->first();

        return view($sitename . $sitedomen . '/spec', [

            'Spec' => $Specialist
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
