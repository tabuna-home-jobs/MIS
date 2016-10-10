<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Feedback extends Model
{

    use SoftDeletes;
    /**
     * @var string
     */
    public $SlugName = 'feedback';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'feedbacks';
    protected $fillable = ['fio', 'phone', 'email', 'content', 'ids'];
}
