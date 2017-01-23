<?php namespace App\Models;

use App\Services\Search\SearchableTrait;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kalnoy\Nestedset\Node;

class Goods extends Node
{

    use SoftDeletes, SearchableTrait;

	/**
	 * @var string
	 */
	public $SlugName = 'service';

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'goods';

	/**
	 * @var array
	 */
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
        'slug',
        'update_at'
    ];
    /**
     * @var array
     */
    protected $searchFields = ['title', 'name'];
    /**
     * @var string
     */
    protected $slugField = 'name';

    /**
     * @return string
     */
    public function scopeGetSlug()
    {
        return $this->slugField;
    }


    /**
     * @return mixed
     */
    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }

    /**
     * @return mixed
     */
    public function comments()
    {
        return $this->hasMany('App\Models\Comments');
    }

    /**
     * @return mixed
     */
    public function getParent()
    {
        return $this->hasMany('App\Models\Goods', 'id', 'parent_id');
    }

    /**
     * @return mixed
     */
    public function complex_goods()
    {
        return $this->belongsToMany('App\Models\GoodsGroup', 'goods_groups', 'good_id', 'good_group_id');
    }

    /**
     * @return mixed
     */
    public function categories()
    {
        return $this->belongsToMany('App\Models\Category', 'goods_categories', 'good_id', 'category_id');
    }
    

}
