<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Request;
use Redirect;
use Validator;
use Session;
use Mail;


class MenuController extends Controller {

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function getIndex()
    {

        $Menu = Menu::paginate(15);


       // $Menu = Menu::find(1)->MenuElement()->get()->all();
        //$Menu = $Menu->name;
       // dd($Menu);


       return view("dashboard/menu/menu",['Menu' => $Menu]);
    }







    public function getAdd($menu = null)
    {
        $menu = Page::find($menu);
        return view("dashboard/menu/menuCrud", ['Menu' => $menu ]);
    }



}
