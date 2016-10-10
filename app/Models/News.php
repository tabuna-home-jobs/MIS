<?php namespace App\Models;

use App\Services\Search\SearchableTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class News extends Model
{

    use SoftDeletes, SearchableTrait;
    /**
     * @var string
     */
    public $SlugName = 'blog';
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
    protected $fillable = [
        'title',
        'name',
        'content',
        'avatar',
        'datetime',
        'tag',
        'descript',
        'ids',
        'created_at',
        'upadate_at'
    ];
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];
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
    /**
     * @var string
     */
    protected $slugField = 'name';

    public function scopeGetSlug()
    {
        return $this->slugField;
    }

    public function getSite()
    {
        return $this->belongsTo('App\Models\Sites', 'ids');
    }
}
