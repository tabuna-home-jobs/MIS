<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comments extends Model
{

    use SoftDeletes;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'comments';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['fio', 'phone', 'email', 'content', 'goods_id', 'ids', 'comments_id', 'publish'];


    public function goods()
    {
        return $this->belongsTo('App\Models\Goods');
    }
}
