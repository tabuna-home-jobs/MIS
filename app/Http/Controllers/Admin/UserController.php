<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Request;
use Redirect;
use Validator;
use Session;
use App\Http\Requests\UserRequest;

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
        $this->middleware('auth');
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
    public function postIndex(UserRequest $request)
    {


        if(!is_null($request->id))
            $user = User::find($request->id);
        else
            $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
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
