<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EncyCategory extends Model {

    use SoftDeletes;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'encycategory';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['encycategory_id', 'title', 'name', 'tag', 'descript', 'text'];


    public function subCategory()
    {
        return $this->hasMany('App\Models\EncyCategory');
    }

    public function mainCategory()
    {
        return $this->belongsTo('App\Models\EncyCategory');
    }


}
