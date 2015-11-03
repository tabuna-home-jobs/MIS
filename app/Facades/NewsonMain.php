<?php
namespace App\Facades;

use App\Models\News as News;
use Illuminate\Support\Facades\Facade;

class NewsonMain  extends Facade {

    static function getNews($siteId,$lim = 6)
    {


        return News::where('ids',$siteId)->limit($lim)->get()->toArray();

    }


}
