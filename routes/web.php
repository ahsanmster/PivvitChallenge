<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});

Auth::routes();

Route::get('/purchase-offering', [
	'as' => 'purchaseOffering',
	'uses' => 'OfferingController@purchaseOfferings'
]);

Route::post('/purchases', [
	'as' => 'purchaseOffering',
	'uses' => 'PurchaseController@purchaseOffer'
]);

Route::get('/purchases', [
	'as' => 'purchaseOffering',
	'uses' => 'PurchaseController@getPurchasedOffer'
]);
