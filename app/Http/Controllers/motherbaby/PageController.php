<?php namespace App\Http\Controllers\motherbaby;

use App\Http\Controllers\Controller;
use App\Http\Requests\Site\CommentRequest;
use App\Models\Comments;
use App\Models\Sites;
use Request;
use Session;

class PageController extends Controller
{


    public function show($Pages, $sitename = 'mother-baby', $sitedomen = 'ru')
    {
        $getSites = Sites::where('domen', '=', $sitename . "." . $sitedomen)->first();

        $Page = $getSites->getPages()->find($Pages->id);

        return view($sitename . $sitedomen . '/page', [
            'Page' => $Page,
        ]);
    }
}
