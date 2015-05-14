<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Sites;
use Redirect;
use Request;
use Session;
use Validator;


class SitesController extends Controller {
    
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
