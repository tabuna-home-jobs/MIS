<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Video extends Model
{

    use SoftDeletes;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'video';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['ids', 'album_id', 'code'];


    public function getSite()
    {
        return $this->belongsTo('App\Models\Sites', 'ids');
    }

    public function getAlbum()
    {
        return $this->belongsTo('App\Models\VideoAlbum', 'album_id');
    }
}
