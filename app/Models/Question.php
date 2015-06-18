<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Question extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'questions';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['quest', 'type', 'surveys_id'];


    public function syrvey()
    {
        return $this->belongsTo('App\Models\Surveys');
    }

}
