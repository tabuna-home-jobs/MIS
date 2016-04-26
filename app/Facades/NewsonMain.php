<?php
namespace App\Facades;

use App\Models\News as News;
use Illuminate\Support\Facades\Facade;

class NewsonMain extends Facade
{

    public static function getNews($siteId, $lim = 6)
    {
        return News::where('ids', $siteId)->orderBy('id', 'Desc')->limit($lim)->get()->toArray();
    }
}
