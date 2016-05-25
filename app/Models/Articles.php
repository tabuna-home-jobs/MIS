<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Remoblaser\Search\SearchableTrait;

class Articles extends Model
{

    use SoftDeletes, SearchableTrait;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'articles';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'name', 'content', 'avatar', 'datetime', 'tag', 'descript', 'ids'];
    protected $searchFields = ['title', 'name', 'content'];


    public $SlugName = 'articles';


    public function getSite()
    {
        return $this->belongsTo('App\Models\Sites', 'ids');
    }
}
