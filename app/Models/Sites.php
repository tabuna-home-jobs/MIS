<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sites extends Model {

    use SoftDeletes;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'sites';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'domen', 'pre'];

    public function getNews()
    {
        return $this->hasOne('App\Models\News','ids');
    }

    public function getShares()
    {
        return $this->hasOne('App\Models\Shares', 'ids');
    }

    public function getReviews()
    {
        return $this->hasOne('App\Models\Reviews', 'ids');
    }


    public function getCategory()
    {
        return $this->hasOne('App\Models\Category', 'ids');
    }

    public function getGoods()
    {
        return $this->hasOne('App\Models\Goods', 'ids');
    }

}
