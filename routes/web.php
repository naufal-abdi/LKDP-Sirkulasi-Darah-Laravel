<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/home', function(){
    return view('home');
});

Route::get('login', 'Auth\PenggunaAuthController@index');
Route::post('login', 'Auth\PenggunaAuthController@auth');
Route::get('logout', 'Auth\PenggunaAuthController@logout');

Route::group(['middleware' => ['auth:pengguna', 'checkAkses']], function(){
	Route::group(['prefix' => 'admin', 'roles' => 1], function(){

		Route::get('/', 'Admin\DashboardController@index');

		Route::post('image-upload', 'ImageController@store');

		Route::prefix('sekolah')->group(function(){
			Route::get('/', 'Admin\SekolahController@index');
		});

		Route::prefix('bahan-ajar')->group(function(){
			Route::get('/', 'Admin\BahanAjarController@index');
			Route::get('add', 'Admin\BahanAjarController@add');
		});

		// Route::prefix('kelas')->group(function(){
		// 	Route::get('/', 'Admin\KelasController@index');
		// });
	});
});
