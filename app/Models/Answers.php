<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Answers extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'answers';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['answer', 'question'];

}
