<?php namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Kalnoy\Nestedset\Node;

class Category extends Node
{

    use SoftDeletes;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'category';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'name', 'text', 'tag', 'descript', 'avatar', 'ids', '_lft', '_rgt', 'parent_id'];




    //Связь категории с товаром
    public function goods()
    {
        return $this->hasMany('App\Models\Goods');
    }


    /*
    public function comment()
    {
        return $this->hasManyThrough('App\Models\Goods', 'App\Models\Comments', 'category_id', 'goods_id');
    }
*/

    //Обратная Зависимость от сайта
    public function site()
    {
        return $this->belongsTo('App\Models\Sites', 'ids');
    }





}
