<?php namespace App\Facades;


use App\Models\Menu as SiteMenu;
use Illuminate\Support\Facades\Facade;

class Menu  extends Facade {

    static function getLI($site,$NameMenu, $pref = '')
    {
        $menu = SiteMenu::whereRaw('ids = ? and name = ?', [$site, $NameMenu])->first();
        $element = $menu->getElement()->orderBy('sort','asc')->get();

        $html = '';

        foreach($element as $li)
        {
            $html .= "<li class='$li->class'><a href='$li->link'> $pref $li->label</a></li>";
        }


        return $html;
    }


    static function getMenuByLayout($site,$NameMenu, $pref = '', $template)
    {
        $menu = SiteMenu::whereRaw('ids = ? and name = ? and parent = ?', [$site, $NameMenu, 0])->first();
        $element = $menu->getElement()->orderBy('sort','asc')->get();


        return view('luchiki48ru/_layout/'.$template, [

            'elems' => $element,
        ]);
    }





}
