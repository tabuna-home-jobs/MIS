<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Entry extends Model
{

    use SoftDeletes;
    public $incrementing = false;
    /**
     * The database table used by the model.
     *
     * @var string
     */

    protected $primaryKey = null;
    protected $table = 'entry';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['beginning', 'end', '1c_busy', 'web_busy', 'timetable_id'];


    public function TimeTable()
    {
        return $this->belongsTo('App\Models\Timetable');
    }
}
