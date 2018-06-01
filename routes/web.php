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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'HomeController@index')->name('dashboard.index');
//************KURIR*************/
Route::get('/kurir', 'CourierController@index')->name('kurir.index');
Route::get('/kurir/create', 'CourierController@create')->name('kurir.create');
Route::post('/kurir/create','CourierController@store');
Route::get('/kurir/{kurir}/edit', 'CourierController@edit')->name('kurir.edit');
Route::patch('/kurir/{kurir}/edit', 'CourierController@update')->name('kurir.update');
Route::delete('/kurir/{kurir}/delete', 'CourierController@destroy')->name('kurir.destroy');
//************PENGIRIM*************/
Route::get('pengirim','SenderController@index')->name('pengirim.index');
Route::get('/pengirim/create', 'SenderController@create')->name('pengirim.create');
Route::post('/pengirim/create','SenderController@store');
Route::get('/pengirim/{pengirim}/edit', 'SenderController@edit')->name('pengirim.edit');
Route::patch('/pengirim/{pengirim}/edit', 'SenderController@update')->name('pengirim.update');
Route::delete('/pengirim/{pengirim}/delete', 'SenderController@destroy')->name('pengirim.destroy');
//************PENGIRIMAN*************/
Route::get('pengiriman','DeliveryController@index')->name('pengiriman.index');
Route::get('/pengiriman/create', 'DeliveryController@create')->name('pengiriman.create');
Route::post('/pengiriman/create','DeliveryController@store');
Route::get('/pengiriman/{pengiriman}/edit', 'DeliveryController@edit')->name('pengiriman.edit');
Route::patch('/pengiriman/{pengiriman}/edit', 'DeliveryController@update')->name('pengiriman.update');
Route::delete('/pengiriman/{pengiriman}/delete', 'DeliveryController@destroy')->name('pengiriman.destroy');
//************TRACKING*************/
Route::get('lokasi','TrackingController@index')->name('lokasi.index');
Route::get('/lokasi/create', 'TrackingController@create')->name('lokasi.create');
Route::post('/lokasi/create','TrackingController@store');
Route::get('/lokasi/{lokasi}/edit', 'TrackingController@edit')->name('lokasi.edit');
Route::patch('/lokasi/{lokasi}/edit', 'TrackingController@update')->name('lokasi.update');
Route::delete('/lokasi/{lokasi}/delete', 'TrackingController@destroy')->name('lokasi.destroy');