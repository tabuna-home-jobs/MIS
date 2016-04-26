<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Album extends Model
{

    use SoftDeletes;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'album';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['ids', 'name'];

    public function getSite()
    {
        return $this->belongsTo('App\Models\Sites', 'ids');
    }

    public function getPhoto()
    {
        return $this->hasOne('App\Models\Photo', 'album_id');
    }

    public function getVideo()
    {
        return $this->hasOne('App\Models\Video', 'album_id');
    }
}
