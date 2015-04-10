<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sites extends Model {

	//

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'sites';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'domen', 'pre'];



}
