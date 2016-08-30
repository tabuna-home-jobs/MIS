<?php namespace App\Facades;

use App\Models\Menu as SiteMenu;
use App\Models\MenuItem;
use Illuminate\Support\Facades\Facade;
use App\Models\Sites;
use Active;

class Menu extends Facade
{

	public static function getLI($site, $NameMenu, $pref = '')
	{
		$menu    = SiteMenu::whereRaw('ids = ? and name = ?', [$site, $NameMenu])->first();
		$element = $menu->getElement()->orderBy('sort', 'asc')->get();

		$html = '';

		foreach ($element as $li) {
			if ((substr($li['link'], 0, 1) == '/') && ($li['link'] != '/')) {
				$active = Active::path(substr($li['link'], 1));


			} else {
				$active = Active::path($li['link']);

			}
			if ($active == "active") {
				$html .= "<li class='$li->class'><a class='dissable'> $pref $li->label</a></li>";
			} else {
				$html .= "<li class='$li->class'><a href='$li->link'> $pref $li->label</a></li>";
			}


		}


		return $html;
	}

	static function getLIActive($site, $NameMenu, $pref = '')
	{
		$menu    = SiteMenu::whereRaw('ids = ? and name = ?', [$site, $NameMenu])->first();
		$element = $menu->getElement()->orderBy('sort', 'asc')->get();

		$html = '';

		foreach ($element as $li) {
			if (substr($li['link'], 0, 1) == '/') {
				$active = Active::path(substr($li['link'], 1));
			} else {
				$active = Active::path($li['link']);
			}
			$html .= "<li class='$active $li->class'><a href='$li->link'> $pref $li->label</a></li>";
		}


		return $html;
	}


	public static function getMenuByLayout($site, $NameMenu, $pref = '', $template)
	{

		$getSites = Sites::where('id', '=', $site)->first();

		$sitename = str_replace('.', '', $getSites['domen']);
		$menu     = SiteMenu::with('items')->where(['ids' => $site, 'name' => $NameMenu])->first();


		$menuParents = collect($menu->items);

		foreach ($menuParents as $key => $item) {
			$child = MenuItem::where(['parent' => $item->id, 'menu' => $item->menu])->get();

			if ($child->count() == 0) {
			} else {
				$item['child'] = $child->toArray();
			}
			if ((substr($item['link'], 0, 1) == '/') && ($item['link'] != '/')) {
				$item['active'] = Active::path(substr($item['link'], 1));
			} else {
				$item['active'] = Active::path($item['link']);
			}

		}

		echo view($sitename . "/_layout/" . $template, ['items' => $menuParents->toArray()])->render();
	}


	public static function getZdorovieNacii($site, $NameMenu, $pref = '', $template)
	{
		$menu = SiteMenu::with('items')->where(['ids' => $site, 'name' => $NameMenu])->first();


		$menuParents   = collect($menu->items);
		$item['child'] = [];

		foreach ($menuParents as $key => $item) {
			$child = MenuItem::where(['parent' => $item->id, 'menu' => $item->menu])->get();

			if ($child->count() != 0) {
				$item['child'] = $child->toArray();
			}
		}


		echo view("newzdorovie48ru/_layout/" . $template, ['items' => $menuParents->toArray()])->render();
	}

	public static function getZdorovieNaciiOld($site, $NameMenu, $pref = '', $template)
	{
		$menu = SiteMenu::with('items')->where(['ids' => $site, 'name' => $NameMenu])->first();


		$menuParents   = collect($menu->items);
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
