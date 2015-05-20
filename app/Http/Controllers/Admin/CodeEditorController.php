<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Storage;

class CodeEditorController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

        //Получаем текущую директорию

        $files = Storage::disk('views')->files();
        $dir = Storage::disk('views')->directories();
        return view("dashboard/codeedit/codeedit", ['files' => $files, 'dir' => $dir]);

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

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        //Показать директорию
        $files = Storage::disk('views')->files($id);
        $dir = Storage::disk('views')->directories($id);
        return response()->json(['files' => $files, 'dir' => $dir]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        //Редактировать файл
        $contents = Storage::disk('views')->get($id);
        response()->json($contents);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        Storage::disk('views')->put($patch, $contents);
        return response()->json('200');
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
