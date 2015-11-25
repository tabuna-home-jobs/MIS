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

    public function getArts()
    {
        return $this->hasOne('App\Models\Articles','ids');
    }


    public function getPages()
    {
        return $this->hasOne('App\Models\Page','ids');
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
    public function getSpecCat()
    {
        return $this->hasOne('App\Models\SpecCat', 'ids');
    }

    /*
    public function getSpecCat()
    {
        return $this->hasOne('App\Models\SpecCat', 'ids');
    }
    */

    public function getTeam()
    {
        return $this->hasOne('App\Models\Specialisty', 'ids');
    }


    public function getSurveys()
    {
        return $this->hasOne('App\Models\Surveys', 'ids');
    }



    public function getAlbums()
    {
        return $this->hasOne('App\Models\Album', 'ids');
    }

    public function getPhoto()
    {
        return $this->hasOne('App\Models\Photo', 'ids');
    }
    public function getVideoAlbums()
    {
        return $this->hasOne('App\Models\VideoAlbum', 'ids');
    }

    public function getVideo()
    {
        return $this->hasOne('App\Models\Video', 'ids');
    }



}
