<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offering extends Model
{
	protected $table = 'offering';
	
	protected $fillable = [
		'title',
		'price'
	];
	
	public function getOffers()
	{
		return $this->get();
	}
}
