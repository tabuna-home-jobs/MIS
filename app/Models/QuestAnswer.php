<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class QuestAnswer extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'questanswer';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['fio', 'questions', 'answer', 'publish', 'ids', 'email', 'phone'];



}
