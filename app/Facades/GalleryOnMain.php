<?php
namespace App\Facades;

use App\Models\Photo as Photo;
use Illuminate\Support\Facades\Facade;

class GalleryOnMain  extends Facade {

    static function getItem($siteId,$id,$lim)
    {


        return Photo::whereRaw('photoalbum_id=? and ids=?',[$id,$siteId])->limit($lim)->get()->toArray();

    }


}
