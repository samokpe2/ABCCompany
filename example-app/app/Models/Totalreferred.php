<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Totalreferred
 * 
 * @property int|null $order_id
 * @property int|null $total_referred
 *
 * @package App\Models
 */
class Totalreferred extends Model
{
	protected $table = 'totalreferred';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'order_id' => 'int',
		'total_referred' => 'int'
	];

	protected $fillable = [
		'order_id',
		'total_referred'
	];
}
