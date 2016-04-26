<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VideoAlbum extends Model
{

    use SoftDeletes;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'videoalbum';

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

    public function getVideo()
    {
        return $this->hasOne('App\Models\Video', 'album_id');
    }
}
