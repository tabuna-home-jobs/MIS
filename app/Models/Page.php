<?php namespace App\Models;

use App\Services\Search\SearchableTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Page extends Model
{

    use SoftDeletes, SearchableTrait;
    public $SlugName = 'page';
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'pages';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'name', 'content', 'tag', 'descript', 'ids', 'upadate_at'];
    /**
     * @var array
     */
    protected $searchFields = ['title', 'name', 'content'];
    protected $slugField = 'name';
    /**
     * Searchable rules.
     *
     * @var array
     */
    protected $searchable = [
        'columns' => [
            'title' => 10,
            'name' => 10,
            'content' => 20,
            'tag' => 5,
            'descript' => 2,
        ]
    ];

    public function scopeGetSlug()
    {
        return $this->slugField;
    }
}
