<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Redirect;
use Request;
use Session;
use Validator;


class AdminController extends Controller {



    public function index()
    {
        $pages = Page::where('ids', '=', Session::get('website'))->count();
        return view("dashboard/home", ['Page' => $pages]);
    }




}
