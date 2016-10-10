<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuestAnswer extends Model
{

    /**
     * @var string
     */

    public $SlugName = 'questanswer';

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
    protected $table = 'questanswer';
    protected $fillable = [
        'fio',
        'questions',
        'answer',
        'publish',
        'ids',
        'email',
        'phone',
        'category_id',
        'doctor_id'
    ];


    public function getDoctor()
    {
        return $this->hasOne('App\Models\Specialisty', 'id', 'doctor_id');
    }

    public function getCategory()
    {
        return $this->hasOne('App\Models\CategoryAnswers', 'id', 'category_id');
    }
}
