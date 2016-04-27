<?php namespace App\Models\Observer;

class CategoryObserver
{


    public function deleted($model)
    {
        $model->goods()->delete();
    }
}
