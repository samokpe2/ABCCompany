<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class User
 * 
 * @property int $id
 * @property string|null $first_name
 * @property string|null $last_name
 * @property string|null $username
 * @property int|null $referred_by
 * @property Carbon|null $enrolled_date
 *
 * @package App\Models
 */
class User extends Model
{
	protected $table = 'users';
	public $timestamps = false;

	protected $casts = [
		'referred_by' => 'int'
	];

	protected $dates = [
		'enrolled_date'
	];

	protected $fillable = [
		'first_name',
		'last_name',
		'username',
		'referred_by',
		'enrolled_date'
	];
}
