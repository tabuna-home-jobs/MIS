<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MenuElement extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'menuelement';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'url', 'menu_id', 'order'];


    public function menu()
    {
        return $this->belongsTo('App\Models\Menu');
    }


}
