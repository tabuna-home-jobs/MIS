<?php
namespace App\Facades;

use App\Models\Articles as Articles;
use Illuminate\Support\Facades\Facade;

class ArticlesOnMain extends Facade
{

    public static function getArts($siteId, $lim = 6)
    {
        return Articles::where('ids', $siteId)->limit($lim)->get()->toArray();
    }
}
