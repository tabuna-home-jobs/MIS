<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use Remoblaser\Search\SearchableTrait;

class News extends Model {

    use SoftDeletes,SearchableTrait;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'news';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'name', 'content', 'avatar', 'datetime', 'tag', 'descript', 'ids', 'created_at'];



    protected $searchFields = ['title', 'name', 'content'];

    /**
     * Searchable rules.
     *
     * @var array
     */
    protected $searchable = [
        'columns' => [
            'title' => 5,
            'name' => 10,
            'content' => 5,
            'tag' => 5,
            'descript' => 2,
        ]
    ];


    public $SlugName = 'blog';

    public function getSite()
    {
        return $this->belongsTo('App\Models\Sites', 'ids');
    }


}
