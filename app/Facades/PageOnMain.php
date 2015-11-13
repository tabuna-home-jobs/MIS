<?php
namespace App\Facades;

use App\Models\Page as OnePage;
use Illuminate\Support\Facades\Facade;

class PageOnMain  extends Facade {

    static function getPage($siteId,$id)
    {


        return OnePage::whereRaw('id=? and ids=?',[$id,$siteId])->get()->toArray();

    }


}