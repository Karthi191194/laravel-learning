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

/*learing2 learning3*/

/*get method*/

/*Route::get('/customer', function(){
   return view('example');
});*/

//Route::get('customer', 'CustomerController@index')->middleware('test'); //"test" is the name added on the kernel.php file

Route::post('customer', 'CustomerController@store');
Route::get('customer/{id}', 'CustomerController@show');
Route::post('customer-update', 'CustomerController@update');
Route::get('customer-update', function(){
    return redirect('customer');
});

//grouping same middleware
//if we want to add same middleware to mutiple URL'S

Route::group(['middleware' => 'test'], function() {
    Route::get('customer', 'CustomerController@index')->middleware('test');
    //Route::get('customer', 'CustomerController@index')->middleware('test');
});