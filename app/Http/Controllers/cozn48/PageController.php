<?php namespace App\Http\Controllers\cozn48;

use App\Http\Controllers\Controller;
use App\Models\Sites;
use Request;
use Session;

class PageController extends Controller
{


    public function show($Pages)
    {
        $getSites = Sites::where('domen', '=', "cozn48.ru")->first();

        $Page = $getSites->getPages()->find($Pages->id);

        return view('cozn48ru/page', [
            'Page' => $Page,
        ]);
    }
}
