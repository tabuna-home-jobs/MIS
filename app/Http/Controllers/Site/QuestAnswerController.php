<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\Site\QuestAnswerRequest;
use App\Models\QuestAnswer;
use App\Models\Sites;
use Illuminate\Http\Request;
use Session;

class QuestAnswerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index($sitename = 'zdorovie48', $sitedomen = 'ru')
    {
        $QuestAnswers = QuestAnswer::whereRaw('ids = ? and publish = ?',
            [Sites::where('domen', '=', $sitename . "." . $sitedomen)->first()->id, true])
            ->orderBy('id', 'desc')
            ->with('getCategory', 'getDoctor')
            ->simplePaginate(8);

        return view($sitename . $sitedomen . '/questanswer', ['QuestAnswers' => $QuestAnswers]);
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
    public function store(QuestAnswerRequest $request, $sitename = 'zdorovie48', $sitedomen = 'ru')
    {
        $new = new QuestAnswer(
            $request->only('fio', 'questions', 'phone', 'email')
        );

        $new->ids = Sites::where('domen', '=', $sitename . "." . $sitedomen)->first()->id;
        $new->save();

        Session::flash('good', 'Спасибо, что написали, мы обязательно ответим вам.');
        return redirect()->back();
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
     * @param  Request $request
     * @param  int $id
     * @return Response
     */
    public function update(Request $request, $id)
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
