<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Request;
use Redirect;
use Validator;
use Session;
use Mail;


class MenuController extends Controller {

    public function __construct()
    {
        //Тут должна быть проверка авторизации
        //$this->middleware('guest');
    }


    public function getIndex()
    {

        //$pagination = Menu::paginate(5);

        //$

        Mail::raw('Текст письма', function($message)
        {
            $message->from('elena@zdorovie48.ru', 'Елена Гладких');

            $message->to('octavian48@yandex.ru')->cc('octavian48@yandex.ru');
        });


        //$menu = Menu::find(1)->MenuElement();

        /*
        dd($menu);
        foreach($Menu as $li)
        {



            $li->menu->name; //Верхнее меню
            foreach ($li->MenuElemet as $element) {
                $element->name; //Это ссылка в меню
            }


        }

        $Menu = Menu::find(1)->MenuElement()->get()->all();
        //$Menu = $Menu->name;
        dd($Menu);


       return view("dashboard/menu/menu",['Menu' => $Menu]);
    }


    public function getAdd($menu = null)
    {
        $menu = Page::find($menu);



        return view("dashboard/menu/menuCrud", ['Menu' => $menu ]);
    }



}
