<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryAnswers extends Model
{
    protected $table = 'category_answers';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];
}
