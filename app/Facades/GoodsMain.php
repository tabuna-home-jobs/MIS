<?php
namespace App\Facades;

use App\Models\Goods as Good;
use Illuminate\Support\Facades\Facade;

class GoodsMain  extends Facade {

    static function getGoods($siteId,$cat_id,$lim = 6)
    {

        return Good::whereRaw('ids=? and category_id=?',[$siteId,$cat_id])->limit($lim)->orderBy('sort', 'ASC')->get()->toArray();

    }


}
