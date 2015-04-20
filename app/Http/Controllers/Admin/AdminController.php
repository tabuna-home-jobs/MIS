<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Request;
use Redirect;
use Validator;
use Session;



class AdminController extends Controller {

    public function __construct()
    {
        //Тут должна быть проверка авторизации
        //$this->middleware('guest');
    }


    public function getIndex()
    {
        return view("dashboard/home");
    }


    // Запонимание положение сайтбара
    public function postSidebar()
    {
        $value = Session::get('Sidebar', 'show');
        if($value == 'show')
            Session::put('Sidebar', 'hide');
        else
            Session::put('Sidebar', 'show');

    }





}
