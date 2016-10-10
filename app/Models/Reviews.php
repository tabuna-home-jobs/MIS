<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reviews extends Model
{

    use SoftDeletes;
    /**
     * @var string
     */
    public $SlugName = 'reviews';
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'reviews';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['fio', 'content', 'datatime', 'publish', 'ids'];

    public function getSite()
    {
        return $this->belongsTo('App\Models\Sites', 'ids');
    }
}
