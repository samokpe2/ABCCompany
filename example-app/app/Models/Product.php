<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 * 
 * @property int|null $id
 * @property string|null $sku
 * @property string|null $name
 * @property float|null $price
 *
 * @package App\Models
 */
class Product extends Model
{
	protected $table = 'products';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'int',
		'price' => 'float'
	];

	protected $fillable = [
		'sku',
		'name',
		'price'
	];
}
