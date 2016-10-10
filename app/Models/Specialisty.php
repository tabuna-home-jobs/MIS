<?php namespace App\Models;

use App\Services\Search\SearchableTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Specialisty extends Model
{

    use SoftDeletes, SearchableTrait;
    public $SlugName = 'team';
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'specialisty';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fio',
        'subname',
        'special',
        'obrazovanie',
        'opyt',
        'about',
        'works',
        'ids',
        'cats',
        'sort',
        'staj',
        'dopinfo',
        'napravlenie',
        'sertificats',
        'best',
        'upadate_at'
    ];
    protected $searchFields = [
        'fio',
        'subname',
        'special',
        'obrazovanie',
        'about',
        'works',
        'dopinfo',
        'napravlenie',
        'sertificats',
        'opyt'
    ];
    protected $slugField = "fio";

    public function scopeGetSlug()
    {
        return $this->slugField;
    }
}
