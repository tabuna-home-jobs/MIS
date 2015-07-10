<?php

namespace App\Http\Controllers\Site;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\EncyCategory;
use App\Models\EncyPost;
use DB;

class EncyclopediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index($sitename,$sitedomen)
    {
        $LastNews = EncyPost::limit(6)->get();
        $MainElementMenu = EncyCategory::where('encycategory_id','0')->select('id','name')->get();



        //Алфавитный указатель
        $Index = DB::table('encypost')
            ->selectRaw('left(name,1) as name')
            ->distinct()
            ->get();
        sort($Index);


        return view( $sitename.$sitedomen.'/encyclopedia',['MainElementMenu' => $MainElementMenu, 'LastNews' => $LastNews,'Index' => $Index]);
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
     * @param  int  $id
     * @return Response
     */
    public function show($sitename,$sitedomen,$model)
    {
        $MainElementMenu = EncyCategory::where('encycategory_id','0')->select('id','name')->get();


        //Алфавитный указатель
        $Index = DB::table('encypost')
            ->selectRaw('left(name,1) as name')
            ->distinct()
            ->get();
        sort($Index);

        return view( $sitename.$sitedomen.'/encyclopediaCategory',[
            'MainElementMenu' => $MainElementMenu,
            'Category' => $model,
            'Index' => $Index
        ]);
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
