<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Answers;
use App\Models\CategoryAnswers;
use Illuminate\Http\Request;
use Session;

class CategoryAnswersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.questAnswer.category', [
            'category' => CategoryAnswers::where('ids', Session::get('website'))->orderBy('id', 'DESC')->paginate(15)
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
    public function store(Request $request)
    {
        $category = new CategoryAnswers($request->all());
        $category->ids = Session::get('website');
        $category->save();

        Session::flash('good', 'Вы успешно создали категорию');
        return redirect()->back();
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
        CategoryAnswers::where('ids', Session::get('website'))
            ->findOrFail($id)
            ->fill($request->all())
            ->save();
        Session::flash('good', 'Вы успешно изменили категорию');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        CategoryAnswers::where('ids', Session::get('website'))->findOrFail($id)->delete();
        Session::flash('good', 'Вы успешно удалили категорию');
        return redirect()->back();
    }
}
