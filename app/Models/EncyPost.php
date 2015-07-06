<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EncyPost extends Model {

    use SoftDeletes;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'encypost';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'encycategory_id',
        'specdoctor',
        'avatar',
        'title',
        'name',
        'tag',
        'descript',
        'opisanie',
        'history',
        'lechenie',
        'diagnostica',
        'pol',
    ];


    public function Category()
    {
        return $this->belongsTo('App\Models\EncyCategory','encycategory_id');
    }



}
