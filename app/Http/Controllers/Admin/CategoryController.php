<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Image;
use Request;
use Session;

class CategoryController extends Controller {




    public function getIndex()
    {
        Category::fixTree();
        $Category = Category::where('ids', Session::get('website'))->paginate(999);
        return view("dashboard/category/category",['Category' => $Category ]);
    }


    public function getAdd($Category = null)
    {
        $categories = Category::select('id', 'name', 'parent_id')
            ->where('ids', Session::get('website'))
            ->get();

        $Category = Category::find($Category);
        return view("dashboard/category/view", [
            'Category' => $Category,
            'Categories' => $categories,
        ]);
    }


    //Добовление и изменение данных
    public function postIndex(CategoryRequest $request)
    {

        if(!is_null($request->id))
            $Category = Category::find($request->id);
        else
            $Category = new Category();

        $Category->title = $request->title;
        $Category->name = $request->name;
        $Category->text = $request->text;
        $Category->tag = $request->tag;

        $Category->parent_id = $request->parent_id;

        if (Request::hasFile('avatar')) {
            Image::make(Request::file('avatar'))->resize(300, 200)->save('upload/' . time() . '.' . Request::file('avatar')->getClientOriginalExtension());
            $Category->avatar = '/upload/' . time() . '.' . Request::file('avatar')->getClientOriginalExtension();
        }else{

            $Category->avatar = '/dash/img/no_img.png';
        }

        $Category->descript = $request->descript;
        $Category->ids = Session::get('website');
        $Category->save();

        //Флеш сообщение
        Session::flash('good', 'Вы успешно изменили значения');
        return redirect()->route('dashboard.category.index');
    }







    public  function  getRestore($Category = null)
    {
        Category::withTrashed()->find($Category)->restore();
        Session::flash('good', 'Вы успешно востановили запись');
        return redirect()->route('dashboard.category.index');
    }

    public function getTrash()
    {
        $Category = Category::onlyTrashed()->where('ids', Session::get('website'))->orderBy('id', 'desc')->paginate(15);
        return view("dashboard/category/trash", ['Category' => $Category]);
    }

    //Удаление
    public function getDestroy($Category = null)
    {
        $Category = Category::find($Category);
        $Category->delete('cascade');
        Session::flash('good', 'Вы успешно удалили значения');
        return redirect()->route('dashboard.category.index');
    }

    public  function  getUnset($Feedback = null)
    {
        Category::withTrashed()->find($Feedback)->forceDelete();
        Session::flash('good', 'Вы успешно окончательно удалили запись');
        return redirect()->route('dashboard.category.index');
    }



}
