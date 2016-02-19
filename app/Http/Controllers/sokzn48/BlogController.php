<?php namespace App\Http\Controllers\sokzn48;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Sites;
use App\Models\Surveys;

class BlogController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index($sitename = "sokzn48", $sitedomen = "ru")
    {
        $getSites = Sites::where('domen', '=', $sitename . "." . $sitedomen)->first();
        $getNews = $getSites->getNews()->orderBy('id', 'desc')->paginate(6);
        $getLastNews = $getSites->getNews()->orderBy('id', 'desc')->limit(3)->get();
        return view($sitename . $sitedomen . '/blog', ['News' => $getNews,'LastNews' => $getLastNews]);
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
    public function show($id, $sitename = "sokzn48", $sitedomen = "ru")
    {
        $getSites = Sites::where('domen', '=', $sitename . "." . $sitedomen)->first();


        $getNews = $getSites->getNews()->find($id);
        $getLastNews = $getSites->getNews()->orderBy('id', 'desc')->limit(3)->get();

        //Опросы
        if ($getSites->getSurveys()->first() != null) {
            $getSurveys = $getSites->getSurveys()->get()->random();
            $getQuests = $getSurveys->quest()->get();
        } else {
            $getQuests = null;
            $getSurveys = null;
        }

        return view($sitename . $sitedomen . '/page', [
            'New' => $getNews,
            'LastNews' => $getLastNews,
            'getQuests' => $getQuests,
            'getSurveys' => $getSurveys,
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
