<?php
namespace App\Facades;

use App\Models\Photo as Photo;
use Illuminate\Support\Facades\Facade;

class GalleryOnMain extends Facade
{

    public static function getItem($siteId, $id, $lim)
    {
        return Photo::whereRaw('album_id=? and ids=?', [$id, $siteId])->limit($lim)->get()->toArray();
    }
}
