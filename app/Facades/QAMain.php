<?php
namespace App\Facades;

use App\Models\QuestAnswer as Quest;
use Illuminate\Support\Facades\Facade;

class QAMain  extends Facade {

    static function getQA($siteId,$lim = 6)
    {


        return Quest::where('ids',$siteId)->limit($lim)->get()->toArray();

    }


}
