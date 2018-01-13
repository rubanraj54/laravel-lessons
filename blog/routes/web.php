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
    // return view('cache.index');
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('/hellolaravel',function(){
//     return "hello laravel";
// });

Route::get('/hellolaravel/{id}/{name}','HelloController@sayHello');

Route::get('/customers','CustomersController@showAllCustomers');

Route::get('/customers/{customer}','CustomersController@showCustomer');
