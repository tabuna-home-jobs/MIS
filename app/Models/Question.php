<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Question extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'question';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['quest', 'type', 'survey'];


}