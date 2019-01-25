<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('login', 'Api\UserController@login');
Route::post('login-driver', 'Api\UserController@loginDriver');

Route::post('register', 'Api\UserController@register');
Route::post('register-driver', 'Api\UserController@registerDriver');

Route::group(['middleware' => 'auth:api'], function(){
	Route::get('users/details', 'Api\UserController@details');
	Route::post('users/edit', 'Api\UserController@edit');

	Route::get('address/get', 'Api\AddressController@get');
	Route::post('address/set', 'Api\AddressController@set');

	Route::get('billing/get', 'Api\BillingController@get');
    Route::post('billing/set', 'Api\BillingController@set');

    Route::get('payment-methods/get', 'Api\PaymentMethodsController@get');
    Route::get('payment-methods/get/{id}', 'Api\PaymentMethodsController@getById');
    Route::post('payment-methods/set', 'Api\PaymentMethodsController@set');
    Route::delete('payment-methods/{id}', 'Api\PaymentMethodsController@delete');

    Route::get('type-cards', 'Api\CatalogsController@getAllTypeCards');

    Route::post('services/quotation', 'Api\ServiceController@Quotation');

    Route::post('tracking', 'Api\TrackingController@tracking');
});

Route::get('kind-persons', 'Api\CatalogsController@getAllKindPersons');
Route::get('countries', 'Api\CatalogsController@getAllContries');
Route::get('states', 'Api\CatalogsController@getAllStates');
Route::get('vehicles', 'Api\CatalogsController@getAllVehicles');
