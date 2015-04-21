<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;


class ChatController extends Controller {

    public function __construct()
    {
        //Тут должна быть проверка авторизации
        //$this->middleware('guest');
    }


    public function getIndex()
    {
        return view("dashboard/chat/chat");
    }





}
