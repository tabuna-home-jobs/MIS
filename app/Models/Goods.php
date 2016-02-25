<?php namespace App\Models;


use Illuminate\Database\Eloquent\SoftDeletes;
use Kalnoy\Nestedset\Node;

class Goods extends Node {

    use SoftDeletes;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'goods';


    protected $casts = [
        'attribute' => 'array',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'name',
        'content',
        'avatar',
        'price',
        'category_id',
        'parent_id',
        '_lft',
        '_rgt',
        'ids',
        'tag',
        'descript',
        'price',
        'attribute',
        'sort',
        'slug'
    ];

    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    public function comments()
    {
        return $this->hasMany('App\Models\Comments');
    }

}
