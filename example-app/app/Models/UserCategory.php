<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UserCategory
 * 
 * @property int|null $user_id
 * @property int|null $category_id
 *
 * @package App\Models
 */
class UserCategory extends Model
{
	protected $table = 'user_category';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'category_id' => 'int'
	];

	protected $fillable = [
		'user_id',
		'category_id'
	];
}
