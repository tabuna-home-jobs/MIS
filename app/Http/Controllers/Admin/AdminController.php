<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Redirect;
use Request;
use Session;
use Validator;


class AdminController extends Controller {

    public function __construct()
    {
        $this->middleware('auth');
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
