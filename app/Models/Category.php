<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model {

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
    protected $fillable = ['title', 'name', 'text', 'tag', 'descript', 'avatar', 'ids'];




    //Связь категории с товаром
    public function goods()
    {
        return $this->hasMany('App\Models\Goods');
    }

    //Обратная Зависимость от сайта
    public function site()
    {
        return $this->belongsTo('App\Models\Sites', 'ids');
    }





}
