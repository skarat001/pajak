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

Route::get('/', 'HomeController@index');

Route::get('/home', 'HomeController@index');
Route::get('/pendaftaran', 'RegistrationController@index');
Route::post('/pendaftaran', 
	['as' => 'room_store', 'uses' => 'RegistrationController@store']);

Route::get('/confirmation', function () {
	return view('process_member/confirmation');

});
Route::get('verifikasi/{id}', 
	['as' => 'verification', 'uses' => 'RegistrationController@verification']);

Route::auth();
Route::group([
	'middleware' => 'auth',

	], function () {


		Route::get('/profil',['as' => 'profil','uses' => 'ProfileController@index']);
		Route::post('/profil/pribadi',['as' => 'profil_pribadi','uses' => 'ProfileController@updateDataPribadi']);
		Route::post('/profil/pekerjaan',['as' => 'profil_pekerjaan','uses' => 'ProfileController@updateDataPekerjaan']);
		Route::post('/profil/pendidikan',['as' => 'profil_pendidikan','uses' => 'ProfileController@setDataPendidikan']);
		Route::get('/profil/h_pendidikan/{id}',['as' => 'h_pendidikan','uses' => 'ProfileController@deleteDataPendidikan']);
		Route::post('/profil/r_pekerjaan',['as' => 'profil_riwayat_pekerjaan','uses' => 'ProfileController@setDataPekerjaan']);
		Route::get('/profil/h_pekerjaan/{id}',['as' => 'h_pekerjaan','uses' => 'ProfileController@deleteDataPekerjaan']);
		Route::post('/profil/sertifikat',['as' => 'profil_sertifikat','uses' => 'ProfileController@setDataSertifikat']);
		Route::get('/profil/h_sertifikat/{id}',['as' => 'h_sertifikat','uses' => 'ProfileController@deleteDatasertifikat']);
		Route::post('/profil/pendaftaran',['as' => 'pendaftaran_anggota','uses' => 'ProfileController@setMember']);
Route::post('/profil/pembayaran/transfer',['as' => 'transfer','uses' => 'ProfileController@payTransfer']);
Route::post('/profil/pembayaran/kasir',['as' => 'kasir','uses' => 'ProfileController@payCashier']);

		Route::get('confirmation/{id}', 
	['as' => 'confirmation', 'uses' => 'ProfileController@confirmation']);


		Route::post('/profil/ubahfoto', ['as' => 'photo','uses' => 'ProfileController@changephoto']);
		Route::get('/profil/getProfil', ['as' => 'getprofil','uses' => 'ProfileController@getProfile']);
		Route::get('/pendaftaran/anggota', ['as' => 'p_anggota','uses' =>'ExtendController@index']);
	});
