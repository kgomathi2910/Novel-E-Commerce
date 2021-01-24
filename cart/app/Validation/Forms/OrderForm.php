<?php
namespace Cart\Validation\Forms;
use Respect\Validation\Validator as v;
class OrderForm
{
	public function rules()
	{
		return [
			'email' => v::email(),
			'name' => v::alpha(' '),
			'lastname' => v::alpha(' '),
			'phonenumber' => v::digit(),
			'address1' => v::alnum(' -'),
			'address2' => v::optional(v::alnum(' -')),
			'city' => v::alpha(' '),
			'postal_code' => v::digit(' '),
		];
	}
}