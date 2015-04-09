<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'survey';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'ids'];


}
