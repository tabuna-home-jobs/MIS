<?php namespace App\Models\Observer;

use Mail;

class FeedBackObserver
{

    public function created($model)
    {
        Mail::send('emails.feedback', $model->toArray(), function ($message) {
            $message->to('niki@zdorovie48.ru')->subject('Обратная связь!');
        });
        return $model;
    }
}
