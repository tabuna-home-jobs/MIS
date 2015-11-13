<?php
namespace App\Facades;

use App\Models\Shares as Shares;
use Illuminate\Support\Facades\Facade;

class sharesOnMain  extends Facade {

    static function getShare($siteId,$lim = 6)
    {


        return Shares::where('ids',$siteId)->limit($lim)->get()->toArray();

    }


}