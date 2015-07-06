<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\EncyCategory;
use App\Models\TimeTable;
use Cache;
use App\Models\EncyPost;

class EncyclopediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */


    public function index()
    {
        /*
        $category = EncyCategory::lists('id','name')->all();
        $specdoctor = Cache::remember('TimeTableSpecialist', 10, function() {
            return TimeTable::distinct()->lists('specialization')->all();
        });
        */

        $listPost = EncyPost::with('Category')->orderBy('id', 'desc')->paginate(15);

        return view("dashboard/encyclopedia/post",['listPost' => $listPost ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {



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
