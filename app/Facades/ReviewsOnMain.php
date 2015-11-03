<?php
namespace App\Facades;

use App\Models\Reviews as Reviews;
use Illuminate\Support\Facades\Facade;

class ReviewsOnMain  extends Facade {

    static function getReview($siteId,$lim = 6)
    {


        return Reviews::where('ids',$siteId)->limit($lim)->get()->toArray();

    }


}
