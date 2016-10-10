<?php namespace App\Http\Controllers\motherbaby;

use App\Http\Controllers\Controller;
use Mail;
use Redirect;
use Sentry;

class CabinetController extends Controller
{

    public function __construct($sitename = 'mother-baby', $sitedomen = 'ru')
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
    public function getIndex($sitename = 'mother-baby', $sitedomen = 'ru')
    {
        //$getSites = Sites::where('domen', '=', $sitename . "." . $sitedomen)->first();
        return view($sitename . $sitedomen . '/cabinet/home', []);
    }


}
