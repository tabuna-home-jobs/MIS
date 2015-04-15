<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
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





    public function getIndex()
    {
        $UsersList = User::orderBy('id', 'desc')->paginate(15);
        return view("dashboard/user/users", ['UsersList' => $UsersList]);
    }

    public function getAdd($user = null)
    {
        $user = User::find($user);

        return view("dashboard/user/usersCrud", ['User' => $user ]);
    }


    //Добовление и изменение данных
    public function postIndex()
    {
        Validator::make(Request::all(), [
            'id' => 'integer',
            'email' => 'required|unique|max:255',
            'name' => 'required|max:255',
        ]);
        $input = Request::all();

        if(isset($input['id']))
            $user = User::find($input['id']);
        else
            $user = new User();

        $user->name = $input['name'];
        $user->email = $input['email'];
        $user->save();

        //Флеш сообщение
        Session::flash('good', 'Вы успешно изменили значения');
        return redirect()->route('user');
    }





    //Удаление
    public function getDestroy($page = null)
    {
        $page = User::find($page);
        $page->delete();
        Session::flash('good', 'Вы успешно удалили значения');
        return redirect()->route('user');
    }




}
