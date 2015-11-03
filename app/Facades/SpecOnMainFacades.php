<?php namespace App\Facades;

use App\Models\Specialisty as Spec;
use Illuminate\Support\Facades\Facade;

class SpecOnMainFacades  extends Facade {

    static function getSpec($siteId)
    {

        return Spec::where('ids',$siteId)->limit(6)->get()->toArray();

    }


}
