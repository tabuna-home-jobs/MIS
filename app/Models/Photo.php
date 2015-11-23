<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Photo extends Model {

    use SoftDeletes;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'photo';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['ids', 'album_id', 'url','videourl'];



    public function getSite()
    {
        return $this->belongsTo('App\Models\Sites', 'ids');
    }

    public function getAlbum()
    {
        return $this->belongsTo('App\Models\Album', 'album_id');
    }


}
