<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Options extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'options';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['ids','module','value'];



    public function getSite()
    {
        return $this->belongsTo('App\Models\Sites', 'ids');
    }


}
