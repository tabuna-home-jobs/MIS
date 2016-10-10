<?php namespace App\Events;

use Illuminate\Queue\SerializesModels;
use Mail;
use SMS;

class SendMailAction extends Event
{

    use SerializesModels;

    /**
     * Отправка кода активации на email клиента
     *
     * @return void
     */
    public function __construct($activationCode, $phone)
    {
        SMS::send($phone, 'Код активации: ' . $activationCode);
    }
}
