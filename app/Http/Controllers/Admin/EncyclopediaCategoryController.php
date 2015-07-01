<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\EncyCategory;
use Session;
use App\Http\Requests\Admin\EncyCategoryRequest;

class EncyclopediaCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $EncyCategory = EncyCategory::orderBy('id', 'desc')->paginate(15);
        return view("dashboard/encyclopedia/category",['EncyCategory' => $EncyCategory ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $allCategory = new EncyCategory();
        $allCategory = $allCategory->select('name','id')->get();
        return view("dashboard/encyclopedia/CreateCategory",['allCategory' => $allCategory ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(EncyCategoryRequest $request)
    {
        $category = new EncyCategory([
                "title" => $request->title,
                "name" => $request->name,
                "tag" => $request->tag,
                "descript" => $request->descript,
                "encycategory_id" => $request->category,
                "text" => $request->category,
        ]);
        $category->save();
        Session::flash('good', 'Вы успешно удалили запись');
        return redirect()->route('dashboard.encyclopediaCategory.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show(EncyCategory $EncyCategory)
    {
        dd($EncyCategory);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit(EncyCategory $EncyCategory)
    {
        $allCategory = new EncyCategory();
        $allCategory = $allCategory->select('name','id')->get();
        return view("dashboard/encyclopedia/EditCategory",[
            'EncyCategory' => $EncyCategory,
            'allCategory' => $allCategory,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(EncyCategory $EncyCategory,EncyCategoryRequest $request)
    {
        $EncyCategory->fill([
                "title" => $request->title,
                "name" => $request->name,
                "tag" => $request->tag,
                "descript" => $request->descript,
                "encycategory_id" => $request->category,
                "text" => $request->category,
            ])->save();

        Session::flash('good', 'Вы успешно удалили запись');
        return redirect()->route('dashboard.encyclopediaCategory.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(EncyCategory $EncyCategory)
    {
        $EncyCategory->forceDelete();
        Session::flash('good', 'Вы успешно удалили запись');
        return redirect()->back();
    }
}
