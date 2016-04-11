<?php namespace App\Models\Observer;

use Mail;

class QuestAnswerObserver
{

    public function created($model)
    {
        Mail::send('emails.questanswer', $model->toArray(), function($message)
        {
            $message->to('octavian48@yandex.ru')->subject('Вопрос требует ответа!');
        });
        return $model;
    }




}
