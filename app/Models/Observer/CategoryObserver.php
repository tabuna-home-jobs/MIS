<?php namespace App\Models\Observer;
use App\Models\Goods;

class CategoryObserver {



    public function deleted($model)
    {
        $model->goods()->delete();
    }



}
