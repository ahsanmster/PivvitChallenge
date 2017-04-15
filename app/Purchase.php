<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
	
	protected $table = 'purchase';
	
	protected $fillable = [
		'quantity',
		'customerName',
		'offeringId'
	];
	
	public function offerDetail()
	{
		return $this->hasOne('App\Offering', 'id', 'offeringID');
	}
	
	public function createPurchase($request)
	{
		return $this->create($request);
	}
	
	public function getPurchases()
	{
		return $this->with('offerDetail')->get();
	}
	
}
