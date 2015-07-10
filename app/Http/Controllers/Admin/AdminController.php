<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Redirect;
use Request;
use Session;
use Validator;
use App\Services\Ok;

class AdminController extends Controller {



    public function index()
    {

        /*
        $test = new Ok(
            '1145219328', 'CBAKKDEFEBABABABA', '5A966F63D4B92D05D5EF69E9'
        );



        if (!$test->checkCurlSupport()){
            print "У вас не установлен модуль curl, который требуется для работы с SDK одноклассников";
            return;
        }
        else
        {
            dd('Хуканул: ключ, токен и сессию -  заебись');
        }
*/
        $pages = Page::where('ids', '=', Session::get('website'))->count();
        return view("dashboard/home", ['Page' => $pages]);
    }




}
