<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Request;
use Redirect;
use Validator;
use Session;



class MenuController extends Controller {

    public function __construct()
    {
        //Тут должна быть проверка авторизации
        //$this->middleware('guest');
    }


    public function getIndex()
    {
        $Menu = Menu::paginate(15);
       return view("dashboard/menu/menu");
    }


}
