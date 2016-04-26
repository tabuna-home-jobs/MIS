<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\SpecCat;
use Illuminate\Http\Request;
use Session;

class SpecCatController extends Controller
{

    public function index()
    {
        //$Category = SpecCat::where('ids', Session::get('website'))->orderBy('id', 'desc')->paginate(15);

        $Category = SpecCat::orderBy('id', 'desc')->paginate(15);
        return view("dashboard/special/categorySpecial", ['Category' => $Category]);
    }


    public function create()
    {
        return view("dashboard/special/categoryCreate");
    }


    public function store(Request $request)
    {
        $cat = new SpecCat;
        $cat->name = $request->name;
        $cat->ids = Session::get('website');
        $cat->save();
        return redirect('dashboard/spcat');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $Category = SpecCat::where('id', $id)->firstOrFail();

        return view("dashboard/special/categoryUpdate", [
            'Category' => $Category
        ]);
    }


    public function update(Request $request, $id)
    {
        $cat = SpecCat::where('id', $id)->firstOrFail();
        $cat->name = $request->name;
        $cat->save();
        return redirect('dashboard/spcat');
    }


    public function destroy($id)
    {
        $cat = SpecCat::where('id', $id)->firstOrFail();
        $cat->delete();
        return redirect('dashboard/spcat');
    }
}
