<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GoodsCategories extends Model
{
    public $timestamps = false;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'goods_categories';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'good_id',
        'category_id',
    ];

    /**
     * @var array
     */
}
