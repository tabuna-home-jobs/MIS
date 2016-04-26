<?php namespace App\Facades;


use App\Models\Menu as SiteMenu;
use App\Models\MenuItem;
use Illuminate\Support\Facades\Facade;
use Active;

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

    static function getLIActive($site,$NameMenu, $pref = '')
    {
        $menu = SiteMenu::whereRaw('ids = ? and name = ?', [$site, $NameMenu])->first();
        $element = $menu->getElement()->orderBy('sort','asc')->get();

        $html = '';

        foreach($element as $li)
        {
            if(substr($li['link'], 0,1) == '/') {
                $active = Active::path(substr($li['link'], 1));
            }else {
                $active = Active::path($li['link']);
            }
            $html .= "<li class='$active $li->class'><a href='$li->link'> $pref $li->label</a></li>";
        }


        return $html;
    }


    static function getMenuByLayout($site, $NameMenu, $pref = '', $template)
    {
        $menu = SiteMenu::with('items')->where(['ids' => $site, 'name' =>$NameMenu])->first();



        $menuParents = collect($menu->items);

        foreach($menuParents as $key => $item){

            $child = MenuItem::where(['parent' => $item->id, 'menu' => $item->menu])->get();

	        if($child->count() == 0){

	        }else{
                $item['child'] = $child->toArray();

	        }

	       // $menuParents->get($key)->push(MenuItem::where('parent',$item['id'])->toArray()->get());
            //$menuParents->keyBy($item['id'])->push(MenuItem::where('parent',$item['id'])->get());
        }

        //dd($menuParents);
        //$element = $menu->getElement()->where('parent', 0)->with('childs')->orderBy('sort','asc')->get();
/*
        return view("luchiki48ru/_layout/".$template, [

            'items' => $menu->items->toArray(),
        ]);*/

	    echo view("sokzn48ru/_layout/".$template, ['items' => $menuParents->toArray()])->render();

    }


    static function getZdorovieNacii($site, $NameMenu, $pref = '', $template)
    {
        $menu = SiteMenu::with('items')->where(['ids' => $site, 'name' => $NameMenu])->first();


        $menuParents = collect($menu->items);
        $item['child'] = [];

        foreach ($menuParents as $key => $item) {

            $child = MenuItem::where(['parent' => $item->id, 'menu' => $item->menu])->get();

            if ($child->count() != 0) {
                $item['child'] = $child->toArray();
            }
        }


        echo view("zdorovie48ru/_layout/" . $template, ['items' => $menuParents->toArray()])->render();
    }

}
