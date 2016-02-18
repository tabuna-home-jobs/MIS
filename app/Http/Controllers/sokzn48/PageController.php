<?php namespace App\Http\Controllers\sokzn48;

use App\Http\Controllers\Controller;
use App\Http\Requests\Site\CommentRequest;
use App\Models\Comments;
use App\Models\Sites;
use Request;
use Session;

class PageController extends Controller
{


    public function show($Pages)
    {

        $getSites = Sites::where('domen', '=', "sokzn48.ru")->first();

        $Page = $getSites->getPages()->find($Pages->id);

        return view('sokzn48ru/page', [
            'Page' => $Page,
        ]);
    }


}
