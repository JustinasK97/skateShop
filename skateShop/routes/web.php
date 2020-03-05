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
    return view('auth.login');
});


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/add_category','CategoryController@addCategory');
Route::POST('/store_category','CategoryController@storeCategory');
Route::get('/control_category','CategoryController@controlCategory');
Route::get('/warning_category/{category}','CategoryController@warningCategory');
Route::get('/delete_category/{category}','CategoryController@deleteCategory');

Route::get('/add_product','ProductController@addProduct'); //psl
Route::POST('/store_product','ProductController@storeProduct');
Route::get('/control_product','ProductController@controlProduct');
Route::get('/editProduct/product/{product}', 'ProductController@editProduct');
Route::POST('/edit_product/{product}', 'ProductController@edit_product');
Route::get('/warning_product/{product}','ProductController@warningProduct');
Route::get('/delete_product/{product}','ProductController@deleteProduct');

Route::get('/orders','OrderController@showOrders');
Route::get('/change_status/order/{order}', 'OrderController@changeStatus');
Route::POST('/change_status/{order}', 'OrderController@change_status');
Route::get('/warning_order/{order}','OrderController@warningOrder');
Route::get('/delete_order/{order}','OrderController@deleteOrder');

Route::get('/logout','HomeController@logout');

Auth::routes();
