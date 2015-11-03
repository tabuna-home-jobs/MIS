<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SpecCat extends Model {

    use SoftDeletes;

    protected $table = 'SpecCat';

    protected $fillable = ['name', 'ids'];

    //Связь категории со специалистами
    public function spec()
    {
        return $this->hasMany('App\Models\Specialisty');
    }

    //Обратная Зависимость от сайта
    public function site()
    {
        return $this->belongsTo('App\Models\Sites', 'ids');
    }

}
