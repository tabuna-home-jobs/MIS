<?php
namespace App\Facades;

use App\Models\News as News;
use Illuminate\Support\Facades\Facade;

class News  extends Facade {

    static function getNews($siteId,$lim = 6)
    {

        return News::whereRaw('ids=? and category_id=?',[$siteId,$cat_id])->limit($lim)->get()->toArray();

    }


}
