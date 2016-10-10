<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryAnswers;
use App\Models\QuestAnswer;
use App\Models\Specialisty;
use Illuminate\Http\Request;
use Session;

class QuestAnswerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $QuestAnswer = QuestAnswer::where('ids', Session::get('website'))->orderBy('id', 'desc')->paginate(15);
        return view("dashboard/questAnswer/index", ['QuestAnswer' => $QuestAnswer]);
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
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
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
        $Doctors = Specialisty::lists('id', 'fio');
        $Category = CategoryAnswers::lists('id', 'name');
        $QuestAnswer = QuestAnswer::whereRaw('ids = ? and id= ?', [Session::get('website'), $id])->first();
        return view("dashboard/questAnswer/edit", [
            'QuestAnswer' => $QuestAnswer,
            'Doctors' => $Doctors,
            'Category' => $Category,
        ]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  Request $request
     * @param  int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $QuestAnswer = QuestAnswer::whereRaw('ids = ? and id= ?', [Session::get('website'), $id])->first();
        $QuestAnswer->fill($request->all());
        $QuestAnswer->save();
        Session::flash('good', 'Вы успешно удалили значения');
        return redirect()->route('dashboard.questanswer.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        $QuestAnswer = QuestAnswer::whereRaw('ids = ? and id= ?', [Session::get('website'), $id])->first();
        $QuestAnswer->delete();
        Session::flash('good', 'Вы успешно удалили значения');
        return redirect()->back();
    }
}
