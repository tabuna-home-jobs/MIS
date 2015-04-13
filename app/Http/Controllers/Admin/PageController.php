<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models;
use Request;
use Redirect;
use Validator;
use Session;
class PageController extends Controller {

    /*
    |--------------------------------------------------------------------------
    | Welcome Controller
    |--------------------------------------------------------------------------
    |
    | This controller renders the "marketing page" for the application and
    | is configured to only allow guests. Like most of the other sample
    | controllers, you are free to modify or remove it as you desire.
    |
    */

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //Тут должна быть проверка авторизации
        //$this->middleware('guest');
    }

    private  function  Validator(){
        Validator::make(Request::all(), [
            'title' => 'max:255',
            'name' => 'required|unique|max:255',
            'content' => 'required',
            'tag' => 'max:255',
            'descript' => 'max:255',
            'ids' => 'integer',
        ]);
    }



    public function Index()
    {
        $PageList = Models\Page::orderBy('id', 'desc')->paginate(15);
        return view("dashboard/page/pages", ['PageList' => $PageList]);
    }

    public function create()
    {
        return view("dashboard/page/pagesCrud");
    }


    public function show($id)
    {
        $Page = Models\Page::find($id);
        return view("dashboard/page/pagesCrud", ['Page' => $Page]);
    }



    public function postPage()
    {

        $this->Validator();
        $input = Request::all();
        $page = new Models\Page();
        $page->title = $input['title'];
        $page->name = $input['name'];
        $page->content = $input['content'];
        $page->tag = $input['tag'];
        $page->descript = $input['descript'];
        $page->ids = $input['ids'];
        $page->save();

        //Флеш сообщение
        Session::flash('good', 'Вы успешно создали страницу');
        return redirect()->route('page');
    }


    public function update(){

        $this->Validator();
        $input = Request::all();
        $page = Models\Page::find($input['id']);
        $page->title = $input['title'];
        $page->name = $input['name'];
        $page->content = $input['content'];
        $page->tag = $input['tag'];
        $page->descript = $input['descript'];
        $page->ids = $input['ids'];
        $page->save();

        //Флеш сообщение
        Session::flash('good', 'Вы успешно обновили страницу!');
        return redirect()->route('page.index');
    }


    //Удаление
    public function destroy($id)
    {
        $Page = Models\Page::find($id);
        $Page->delete();
    }



}
