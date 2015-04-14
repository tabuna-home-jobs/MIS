<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Request;
use Redirect;
use Validator;
use Session;
use App\Models\Sites;


class SitesController extends Controller {

    public function __construct()
    {
        //Тут должна быть проверка авторизации
        //$this->middleware('guest');
    }


    public function getIndex()
    {
            return view("dashboard/sites", ['sites' => Sites::all() ]);
    }

    public function getSelect($site)
    {

        if(Sites::find($site))
        {
            Session::put('website', $site);
             return redirect()->route('admin');
        }
        else
        {
            Session::flash('bad', 'Требуемый сайт в системе не значиться');
            return redirect()->route('sites');
        }
    }





}
