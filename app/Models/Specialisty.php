<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Services\Search\SearchableTrait;

class Specialisty extends Model
{

	use SoftDeletes, SearchableTrait;
	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'specialisty';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'fio',
		'subname',
		'special',
		'obrazovanie',
		'opyt',
		'about',
		'works',
		'ids',
		'cats',
		'sort',
		'staj',
		'dopinfo',
		'napravlenie',
		'sertificats',
		'best'
	];

	protected $searchFields = [ 'fio', 'subname', 'special', 'obrazovanie', 'about',
		'works', 'dopinfo',
		'napravlenie',
		'sertificats','opyt'];

	public $SlugName = 'team';
}
