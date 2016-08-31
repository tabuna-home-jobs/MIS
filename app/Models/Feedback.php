<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Feedback extends Model
{

    use SoftDeletes;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'feedbacks';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */


	/**
	 * @var string
	 */
	public $SlugName = 'feedback';
    protected $fillable = ['fio', 'phone', 'email', 'content', 'ids'];
}
