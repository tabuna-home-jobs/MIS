<?php namespace App\Models\Observer;


class GoodsObserver
{


    public function deleted($model)
    {
        $model->comments()->delete();
    }


    public function saving($model)
    {
        if (!empty($model->name)) {
            $model->slug = str_slug($model->name, '-');
        } elseif (!empty($model->title)) {
            $model->slug = str_slug($model->title, '-');
        }
    }


}
