<?php

namespace App\Http\Controllers\zdorovie48;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\News;
use App\Models\Page;
use App\Models\Shares;
use App\Models\Sites;
use Illuminate\Http\Request;
use App\Http\Requests\SearchRequest;
use Search;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($sitename = "zdorovie48", $sitedomen = "ru")
    {
        return view($sitename . $sitedomen . '/search', [
            'query' => null,
            'search' => null,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(SearchRequest $request, $sitename = "zdorovie48", $sitedomen = "ru")
    {

        $query = $request->input('search');
        $site = Sites::where('domen', '=', $sitename . "." . $sitedomen)->first()->id;
        $search = Search::all($query);

        $search = array_flatten($search);

        foreach ($search as $key => $value) {
            $filtered = $value->where('ids', $site);
            $search[$key] = $filtered->all();
        }

        return view($sitename . $sitedomen . '/search', [
            'query' => $query,
            'search' => collect($search),
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
