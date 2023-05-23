<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class OrderItem
 * 
 * @property int|null $order_id
 * @property int|null $product_id
 * @property int|null $qantity
 *
 * @package App\Models
 */
class OrderItem extends Model
{
	protected $table = 'order_items';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'order_id' => 'int',
		'product_id' => 'int',
		'qantity' => 'int'
	];

	protected $fillable = [
		'order_id',
		'product_id',
		'qantity'
	];

	public static function getOrderItemDetails($order_id){

		return OrderItem::leftJoin("products", "products.id", "order_items.product_id")->where("order_items.order_id","=",$order_id)->get();
		
	}
}
