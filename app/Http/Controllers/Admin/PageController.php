<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
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


    public function Index(Page $page)
    {
        $PageList = $page->orderBy('id', 'desc')->paginate(15);
        return view("dashboard/page/pages", ['PageList' => $PageList]);
    }


    public function postPage(Page $page)
    {

	    Validator::make(Request::all(), [
		    'title' => 'max:255',
		    'name' => 'required|unique|max:255',
		    'content' => 'required',
		    'tag' => 'max:255',
		    'descript' => 'max:255',
		    'ids' => 'integer',
	    ]);

        $input = Request::all();
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



    //Удаление
    public function postDestroy(Page $page)
    {
        $page->delete();
    }




}
