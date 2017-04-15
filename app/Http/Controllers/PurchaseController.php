<?php

namespace App\Http\Controllers;

use App\Http\Requests\PurchaseOffering;
use App\Purchase;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
	
	function __construct()
	{
		$this->purchase = new Purchase();
	}
	
	public function purchaseOffer(PurchaseOffering $request)
	{
		try {
			$this->purchase->createPurchase($request->all());
			return redirect()->back()->with('message', 'Purchased');
		} catch (\Exception $e) {
			return redirect()->back()->with('failure', 'Purchased');
		}
	}
	
	public function getPurchasedOffer(Request $request)
	{
		$purchases = $this->purchase->getPurchases();
		return view('purchases.purchasedOffers',[
			'purchases' => $purchases
		]);
	}
}
