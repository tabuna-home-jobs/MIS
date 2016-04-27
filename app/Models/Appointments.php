<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Appointments extends Model
{
    use SoftDeletes;

    public $incrementing = false;
    /**
     * The database table used by the model.
     *
     * @var string
     */

    protected $primaryKey = null;

    protected $table = 'appointments';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'subdivision',
        'specialization',
        'name',
        'beginning',
        'end',
        'firstname',
        'lastname',
        'email',
        'phone',
        'comment',
        'spec_id',
        'export',
    ];
}
