<?php namespace App\Http\Controllers\luchiki48;

use App\Http\Controllers\Controller;
use App\Models\Sites;
use Request;
use Session;

class PageController extends Controller
{


    public function show($Pages)
    {
        $getSites = Sites::where('domen', '=', "luchiki48.ru")->first();

        $Page = $getSites->getPages()->find($Pages->id);

        return view('luchiki48ru/page', [
            'Page' => $Page,
        ]);
    }
}
