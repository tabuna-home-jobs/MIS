<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TimeTable extends Model
{

    use SoftDeletes;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'timetable';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['subdivision', 'specialization', 'name', 'cabinet'];


    //Связь категории с товаром
    public function entry()
    {
        return $this->hasMany('App\Models\Entry', 'timetable_id');
    }
}
