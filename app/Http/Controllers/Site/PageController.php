<?php namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\Sites;
use Request;
use App\Models\Comments;
use App\Http\Requests\Site\CommentRequest;
use Session;

class PageController extends Controller {


    public function show($sitename, $sitedomen, $Pages)
    {
        $getSites = Sites::where('domen', '=', $sitename . "." . $sitedomen)->first();

        $Page = $getSites->getPages()->find($Pages->id);

         return view($sitename . $sitedomen . '/page', [
             'Page' => $Page,
         ]);
    }


}
