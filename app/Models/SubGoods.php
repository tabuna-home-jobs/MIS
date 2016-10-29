<?php namespace App\Models;

use App\Services\Search\SearchableTrait;
use Illuminate\Database\Eloquent\SoftDeletes;
use Kalnoy\Nestedset\Node;

class SubGoods extends Node
{

    use SoftDeletes, SearchableTrait;
    //public $SlugName = 'service';
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'subgoods';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'avatar',
        'price',
        'parent_good_id',
        'ids',
        'price',
        'sort',
        'upadate_at'
    ];
    /**
     * @var array
     */
    protected $searchFields = ['name'];
    /**
     * @var string
     */
    protected $slugField = 'name';

    public function scopeGetSlug()
    {
        return $this->slugField;
    }


    public function good()
    {
        return $this->belongsTo('App\Models\Goods');
    }

   
    public function getParent()
    {
        return $this->hasMany('App\Models\Goods', 'id', 'parent_good_id');
    }

    public function complex_goods()
    {
        return $this->belongsToMany('App\Models\GoodsGroup', 'goods_groups', 'good_id', 'good_group_id');
    }
    public function complex_subgoods()
    {
        return $this->belongsToMany('App\Models\GoodsGroup', 'subgoods_groups', 'subgood_id', 'good_group_id');
    }
}
