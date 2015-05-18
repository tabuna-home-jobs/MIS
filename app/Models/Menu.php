<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Menu extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'menu';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'type', 'ids'];


    public function MenuElement()
    {
        return $this->hasMany('App\Models\MenuElement');
    }

}
