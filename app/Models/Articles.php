<?php namespace App\Models;

use App\Services\Search\SearchableTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Articles extends Model
{

    use SoftDeletes, SearchableTrait;
    public $SlugName = 'articles';
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
    protected $fillable = ['title', 'name', 'content', 'avatar', 'datetime', 'tag', 'descript', 'ids', 'upadate_at'];
    protected $searchFields = ['title', 'name', 'content'];

    public function getSite()
    {
        return $this->belongsTo('App\Models\Sites', 'ids');
    }
}
