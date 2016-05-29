<?php


use App\Http\Requests;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
	return view('welcome');
});
Route::get('/home', 'HomeController@index');
Route::get('/pendaftaran', 'RegistrationController@index');
Route::post('/pendaftaran', 
	['as' => 'room_store', 'uses' => 'RegistrationController@store']);
Route::get('/perpanjang', 'ExtendController@index');
Route::get('/sample-page', function () {
	return view('sample');

});
Route::auth();
Route::group([
	'middleware' => 'auth',

	], function () {


		Route::get('/profil', 'ProfileController@index');
Route::post('/profil/ubahfoto', ['as' => 'room_store','uses' => 'ProfileController@changephoto']);
	});
