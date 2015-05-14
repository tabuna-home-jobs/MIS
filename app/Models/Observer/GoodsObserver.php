<?php namespace App\Models\Observer;


class GoodsObserver {



    public function deleted($model)
    {
        $model->comments()->delete();
    }



}
