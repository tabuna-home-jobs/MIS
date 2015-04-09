<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'feedback';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['fio', 'phone', 'email', 'content', 'ids'];

}
