<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Remoblaser\Search\SearchableTrait;

class Shares extends Model
{

    use SoftDeletes, SearchableTrait;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'shares';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'name', 'content', 'avatar', 'start', 'end', 'tag', 'descript', 'ids'];


    /**
     * @var array
     */
    protected $searchFields = ['title', 'name', 'content'];


    public $SlugName = 'shares';


    /**
     * Searchable rules.
     *
     * @var array
     */
    protected $searchable = [
        'columns' => [
            'title' => 10,
            'name' => 10,
            'content' => 2,
            'tag' => 5,
            'descript' => 2,
        ]
    ];


    public function getSite()
    {
        return $this->belongsTo('App\Models\Sites', 'ids');
    }
}
