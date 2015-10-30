<?php
namespace App\Facades;

use App\Models\Goods as Good;
use Illuminate\Support\Facades\Facade;

class GoodsMain  extends Facade {

    static function getGoods($siteId,$cat_id)
    {

        return Good::where('ids=? and category_id=?',[$siteId,$cat_id])->limit(5)->get()->toArray();

    }


}
