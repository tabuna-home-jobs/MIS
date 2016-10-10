<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\OptionsRequest;
use App\Models\Options;
use Session;

class OptionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $Options = Options::where('ids', Session::get('website'))->orderBy('id', 'desc')->paginate(15);
        return view("dashboard/options/options", ['Options' => $Options]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view("dashboard/options/CreateOptions");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(OptionsRequest $request)
    {
        $options = new Options([
            'module' => $request->module,
            'value' => $request->value,
            'ids' => Session::get('website'),
        ]);
        $options->save();
        Session::flash('good', 'Вы успешно добавили значения');
        return redirect()->route('dashboard.options.index');
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
        $Options = Options::whereRaw('ids= ? and id=?', [Session::get('website'), $id])->first();
        return view("dashboard/options/EditOptions", ['Options' => $Options]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update(OptionsRequest $request)
    {
        $Options = Options::whereRaw('ids= ? and id=?', [Session::get('website'), $request->id])->first();
        $Options->fill([
            'module' => $request->module,
            'value' => $request->value,
            'ids' => Session::get('website'),
        ]);
        Session::flash('good', 'Вы успешно изменили значения');
        return redirect()->route('dashboard.options.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        $Options = Options::whereRaw('ids= ? and id=?', [Session::get('website'), $id])->first();
        $Options->delete();
        Session::flash('good', 'Вы успешно удалили значения');
        return redirect()->route('dashboard.options.index');
    }
}
