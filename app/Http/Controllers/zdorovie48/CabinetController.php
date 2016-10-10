<?php namespace App\Http\Controllers\zdorovie48;

use App\Http\Controllers\Controller;
use Mail;
use Redirect;
use Sentry;

class CabinetController extends Controller
{

    public function __construct($sitename = 'zdorovie48', $sitedomen = 'ru')
    {
        if (!Sentry::check()) {
            Redirect::to('/auth/login')->send();
        }
    }


    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function getIndex($sitename = 'zdorovie48', $sitedomen = 'ru')
    {
        //$getSites = Sites::where('domen', '=', $sitename . "." . $sitedomen)->first();
        return view('new' . $sitename . $sitedomen . '/cabinet/home', []);
    }


}
