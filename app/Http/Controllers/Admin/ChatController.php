<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class ChatController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function getIndex()
    {
        return view("dashboard/chat/chat");
    }
}
