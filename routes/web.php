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
Route::get('array', function () {
    return view('array');
});
Route::get('each', function () {
    return view('Each');
});
Route::get('coba', function () {
    return view('Coba');
});	
Route::get('negara', function () {
    return view('TableJquery');
});
Route::resource('table','AController');
Route::get('/data','AController@index');
Route::get('/user/json','AController@json');
Route::post('create', 'AController@store')->name('store');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
