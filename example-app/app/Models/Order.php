<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Order
 * 
 * @property int|null $id
 * @property string|null $invoice_number
 * @property int|null $purchaser_id
 * @property Carbon|null $order_date
 *
 * @package App\Models
 */
class Order extends Model
{
	protected $table = 'orders';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'purchaser_id' => 'int'
	];

	protected $dates = [
		'order_date'
	];

	protected $fillable = [
		'invoice_number',
		'purchaser_id',
		'order_date'
	];
}
