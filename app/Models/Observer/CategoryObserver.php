<?php namespace App\Models\Observer;
use App\Models\Goods;
use App\Models\Comments;

class CategoryObserver {



    public function deleted($model)
    {
        $model->goods()->delete();
    }



}
