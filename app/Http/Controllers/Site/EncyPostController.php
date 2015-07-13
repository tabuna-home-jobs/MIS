<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use DB;
use Request;
use App\Models\EncyCategory;
use App\Models\EncyPost;
use App\Models\Sites;

class EncyPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index($sitename,$sitedomen )
    {

        //Алфавитный указатель
        $Index = DB::table('encypost')
            ->selectRaw('left(name,1) as name')
            ->distinct()
            ->get();
        sort($Index);
        $MainElementMenu = EncyCategory::where('encycategory_id','0')->select('id','name')->get();



        if(Request::has('index')) {
            $Index = EncyPost::whereRaw('left(name,1) = ?', [Request::get('index')])->paginate(10);
            return view($sitename . $sitedomen . '/encyclopediaPostList', [
                'PostList' => $Index,
                'MainElementMenu' => $MainElementMenu,
                'Index' => $Index
            ]);
        }


        if(Request::has('search')) {
            $Index = EncyPost::where('name', 'like', "%"+Request::get('search') + "%")->paginate(10);
            return view($sitename . $sitedomen . '/encyclopediaPostList', [
                'PostList' => $Index,
                'MainElementMenu' => $MainElementMenu,
                'Index' => $Index
            ]);
        }


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
        $getSites = Sites::where('domen', '=', $sitename . "." . $sitedomen)->first();
        $getLastNews = $getSites->getNews()->orderBy('id', 'desc')->limit(2)->get();


        //Алфавитный указатель
        $Index = DB::table('encypost')
            ->selectRaw('left(name,1) as name')
            ->distinct()
            ->get();
        sort($Index);




        $MainElementMenu = EncyCategory::where('encycategory_id','0')->select('id','name')->get();
        return view( $sitename.$sitedomen.'/encyclopediaPost',[
            'post' => $model,
            'MainElementMenu' => $MainElementMenu,
            'LastNews' => $getLastNews,
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