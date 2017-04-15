<?php

namespace App\Http\Controllers;

use App\Offering;
use Illuminate\Http\Request;

class OfferingController extends Controller
{
	
	function __construct()
	{
		$this->offers = new Offering();
	}
	
	public function purchaseOfferings()
	{
		$offers = $this->offers->getOffers();
		return view('offerings.purchaseOfferings',[
			'offers' => $offers
		]);
	}
}
