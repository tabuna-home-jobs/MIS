<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models;
use Request;
use Redirect;
use Validator;
use Session;

class UserController extends Controller {

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





    public function Index()
    {
        $UsersList = Models\User::orderBy('id', 'desc')->paginate(15);
        return view("dashboard/user/users", ['UsersList' => $UsersList]);
    }

    public function create()
    {
        return view("dashboard/page");
    }


    public function show($id)
    {
        $User = Models\User::find($id);
        return view("dashboard/user/user", ['User' => $User]);
    }



    public function postPage()
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
        $page = new Models\Page();

        //dd('Здохни Шелдон. Здохни!');
        //Заполнение модели
        $page->title = $input['title'];
        $page->name = $input['name'];
        $page->content = $input['content'];
        $page->tag = $input['tag'];
        $page->descript = $input['descript'];
        $page->ids = $input['ids'];
        $page->save();

        //Флеш сообщение
        Session::flash('good', 'Вы успешно создали тикет!');
        return redirect()->route('page');

    }


}
