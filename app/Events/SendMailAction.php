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
    public function __construct($activationCode, $request)
    {
        Mail::send('mail/activate', ['activationCode' => $activationCode, 'email' => $request->email, 'phone' => $request->phone],
            function ($message) use ($request) {
                $message->to($request->email)->cc($request->email);
            });

        SMS::send($request->phone,'Код активации: '.$activationCode);


    }
}
