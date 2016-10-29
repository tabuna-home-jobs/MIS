<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubGoodsGroups extends Model
{
    public $timestamps = false;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'subgoods_groups';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'subgood_id',
        'good_group_id',
    ];

    /**
     * @var array
     */
}
