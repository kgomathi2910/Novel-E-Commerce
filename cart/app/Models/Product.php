<?php
namespace Cart\Models;
use Cart\Models\Order;
use Illuminate\Database\Eloquent\Model;
//making product as subclass of model from eloquent
class Product extends Model
{
	public $quantity = null;
	public function hasLowStock()
	{
		if ($this->outOfStock()) {
			return false;
		}
		return (bool) ($this->stock <= 5);
	}
	public function outOfStock()
	{
		return (bool) ($this->stock === 0);
	}
	public function inStock()
	{
		return (bool) ($this->stock >= 1);
	}
	public function hasStock($quantity)
	{
		return (bool) ($this->stock >= $quantity);
	}
	public function order()
	{
		return $this->belongsToMany(Order::class, 'orders_products')->withPivot('quantity');
	}
}