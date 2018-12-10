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
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('kind-persons', 'KindPersonsController');
Route::resource('users', 'UserController');
Route::resource('roles', 'RoleController');
Route::resource('permissions', 'PermissionController');
Route::resource('vehicles', 'VehicleController');
Route::resource('countries', 'CountryController');
Route::resource('charges', 'ChargeController');

//Ruta de servicios
Route::resource('services', 'ServiceController');
Route::get('services/{id}/coordinates', 'ServiceController@coordinates');
Route::get('services/{id}/charges', 'ServiceController@charges');
Route::get('services/{id}/deliveries', 'ServiceController@deliveries');
Route::get('services/{id}/payments', 'ServiceController@payments');
Route::get('services/{id}/tracking', 'ServiceController@tracking');


Route::get('/change-password','UserController@changePassword');
Route::post('/change-password','UserController@updatePassword')->name('change-password');

Route::get('/register-client','UserController@registerClient');
Route::post('/register-client','UserController@registerClientCreate')->name('register-client');

Route::get('/register-driver','UserController@registerDriver');
Route::post('/register-driver','UserController@registerDriverCreate')->name('register-driver');

Route::post('/create-step-two','ServiceController@createStepTwo');

Route::get('/terms','TermController@index')->name('terms');

Route::get('auth/{provider}', 'Auth\SocialAuthController@redirectToProvider')->name('social.auth');
Route::get('auth/{provider}/callback', 'Auth\SocialAuthController@handleProviderCallback');


Route::resource('profilers', 'ProfilerController');
Route::resource('profilers-image', 'ProfilerImageController');

Route::resource('address', 'AddressController');
Route::resource('billings', 'BillingController');
Route::resource('cards', 'CardsController');
Route::resource('states', 'StateController');

Route::post('user-image','ProfilerImageController@imageUser')->name('user-image');
Route::post('vehicle-image','ProfilerImageController@imageVehicle')->name('vehicle-image');






