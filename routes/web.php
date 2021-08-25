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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function() {
    //admin
    Route::get('/dashboard', 'AdministatorController@index')->name('dashboard');
    Route::get('/products', 'ProductController@products_index');
    Route::get('/categories', 'CategoryController@admin_index');
    Route::get('/drivers', 'DriversController@admin_index');
    Route::get('/orders', 'OrdersController@admin_index');
    Route::get('/users', 'UsersController@admin_index');
    Route::get('/customers', 'CustomersController@admin_index');
});