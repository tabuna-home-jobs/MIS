<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Catalog extends Model {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'catalog';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'name', 'content', 'avatar', 'price', 'idcat', 'ids', 'tag', 'descript'];

}
