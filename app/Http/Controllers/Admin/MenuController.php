<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MenuChildRequest;
use App\Http\Requests\MenuRequest;
use App\Models\Menu;
use App\Models\MenuElement;
use Mail;
use Redirect;
use Request;
use Session;
use Validator;


class MenuController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function getIndex()
    {

        $Menu = Menu::paginate(15);
        return view("dashboard/menu/menu", ['Menu' => $Menu]);
    }


    public function getAdd($menu = null)
    {
        $menu = Menu::find($menu);
        return view("dashboard/menu/menuCrud", ['Menu' => $menu]);
    }


    public function postAdd(MenuRequest $request)
    {
        if (is_null($request->id)) {
            $menu = new Menu([
                'name' => $request->name,
                'type' => $request->type,
                'ids' => Session::get('website'),
            ]);
            $menu->save();

            //Флеш сообщение
            Session::flash('good', 'Вы успешно создали меню');
            return redirect()->route('menu');
        } else {
            $menu = Menu::find($request->id);
            $menu->name = $request->name;
            $menu->type = $request->type;
            $menu->save();

            //Флеш сообщение
            Session::flash('good', 'Вы успешно изменили меню');
            return redirect()->route('menu');
        }

    }


    //Удаление
    public function getDestroy($menu = null)
    {
        $page = Menu::find($menu);
        $page->delete();
        Session::flash('good', 'Вы успешно удалили значения');
        return redirect()->route('menu');
    }


    public function getChildmenu($menu)
    {
        $menu = Menu::find($menu);
        $childmenu = $menu->MenuElement()->get();
        return view("dashboard/menu/childMenu", ['Menu' => $menu, 'Child' => $childmenu]);
    }


    public function postAddchild(MenuChildRequest $request)
    {

        if (!is_null($request->id)) {
            $menu = Menu::find($request->menuid);
            $childmenu = $menu->MenuElement()->find($request->id);
            $childmenu->name = $request->name;
            $childmenu->order = $request->order;
            $childmenu->url = $request->url;
            $childmenu->save();
            Session::flash('good', 'Вы успешно изменили значения');
            return redirect()->back();
        } else {
            $menu = Menu::find($request->menuid);
            $childmenu = new MenuElement([
                'name' => $request->name,
                'order' => $request->order,
                'url' => $request->url
            ]);
            $menu->MenuElement()->save($childmenu);
            Session::flash('good', 'Вы успешно создали значения');
            return redirect()->back();
        }
    }


}
