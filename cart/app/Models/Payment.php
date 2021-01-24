<?php
namespace Cart\Models;
use Illuminate\Database\Eloquent\Model;
//making payment as subclass of model from eloquent
class Payment extends Model
{
	protected $fillable = [
		'failed',
		'transaction_id',	
	];
}