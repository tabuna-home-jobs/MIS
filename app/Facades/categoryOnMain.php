<?php
namespace App\Facades;

use App\Models\Category as Category;
use Illuminate\Support\Facades\Facade;
use Request;

class categoryOnMain extends Facade
{

    public static function getCats($siteId, $lim = 6)
    {
        $catId = Request::input('category');


        return Category::where('ids', $siteId)
            ->where('parent_id', $catId)
            ->limit($lim)->get();
    }
}
