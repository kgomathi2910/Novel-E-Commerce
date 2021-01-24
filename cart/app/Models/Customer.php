<?php
namespace Cart\Models;
use Cart\Models\Order;
use Illuminate\Database\Eloquent\Model;
//making customer as subclass of model from eloquent
class Customer extends Model
{
	protected $fillable = [
		'email',
		'name',
		
	];
	public function orders()
	{
		return $this->hasMany(Order::class);
	}
}