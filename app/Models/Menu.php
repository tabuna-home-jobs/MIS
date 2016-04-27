<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{

    protected static $menuitem = MenuItem::class;

    public function items()
    {
        return $this->hasMany(static::$menuitem, 'menu', 'id')->where('parent', 0)->orderBy('sort');
    }

    public function getElement()
    {
        return $this->hasMany('App\Models\MenuItem', 'menu');
    }
}
