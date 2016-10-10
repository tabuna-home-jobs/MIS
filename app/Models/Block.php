<?php namespace App\Models;

use App\Services\Search\SearchableTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Block extends Model
{

    use SoftDeletes, SearchableTrait;
    public $SlugName = 'block';
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'blocks';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'name', 'cont', 'descript', 'ids', 'slug'];
    /**
     * @var array
     */
    protected $searchFields = ['title', 'name', 'cont', 'slug'];
    /**
     * Searchable rules.
     *
     * @var array
     */
    protected $searchable = [
        'columns' => [
            'title' => 10,
            'name' => 10,
            'cont' => 20,
            'slug' => 10,
            'tag' => 5,
            'descript' => 2,
        ]
    ];

    public function items()
    {
        return $this->hasMany('App\Models\BlockItem', 'block_id');
    }
}
