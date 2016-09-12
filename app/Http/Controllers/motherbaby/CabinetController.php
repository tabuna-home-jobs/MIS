<?php namespace App\Http\Controllers\motherbaby;

use App\Events\SendMailAction;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Requests\ActionRequest;
use App\Http\Requests\AuthLoginRequest;
use App\Http\Requests\AuthRequest;
use App\Http\Requests\RepeatRequest;
use App\Models\Sites;
use App\Models\User;
use Mail;
use Sentry;
use Redirect;
class CabinetController extends Controller
{

    public function __construct($sitename = 'mother-baby', $sitedomen = 'ru')
    {
        if (! Sentry::check()) {
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
        return view( $sitename . $sitedomen . '/cabinet/home', []);
    }


}
