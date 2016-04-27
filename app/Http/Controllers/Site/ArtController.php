<?php namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Sites;

class ArtController extends Controller
{


    public function index($sitename = 'zdorovie48', $sitedomen = 'ru')
    {
        $getSites = Sites::where('domen', '=', $sitename . "." . $sitedomen)->first();
        $getArts = $getSites->getArts()->orderBy('id', 'desc')->paginate(5);
        return view($sitename . $sitedomen . '/Articles', ['art' => $getArts]);
    }


    public function create()
    {
        //
    }


    public function store()
    {
        //
    }


    public function show($id, $sitename = 'zdorovie48', $sitedomen = 'ru')
    {
        $getSites = Sites::where('domen', '=', $sitename . "." . $sitedomen)->first();
        $getArts = $getSites->getArts()->find($id->id);

        return view($sitename . $sitedomen . '/artItem', [
            'art' => $getArts,
        ]);
    }


    public function edit($id)
    {
        //
    }


    public function update($id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
