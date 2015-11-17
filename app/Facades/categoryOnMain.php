<?php
namespace App\Facades;

use App\Models\Category as Category;
use Illuminate\Support\Facades\Facade;

class categoryOnMain  extends Facade {

    static function getCats($siteId,$lim = 6)
    {


        return Category::where('ids',$siteId)->limit($lim)->get();

    }


}