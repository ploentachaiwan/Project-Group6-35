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

Route::get('/', 'WelcomeController@index')->name('welcome');

Route::middleware(['auth', 'admin'])->group(function () {

    //admin
    Route::get('admin/admin/index', 'Admin\AdminController@index')->name('admin.index');
    Route::get('admin/admin/addadmin', 'Admin\AddadminController@addadmin')->name('addadmin');

    //producte
    Route::get('admin/product/index', 'Admin\ProductController@index')->name('product.index');
    Route::get('admin/product/addproduct', 'Admin\AddProductController@addproduct')->name('addproduct');
    Route::get('admin/product/edit/{id}', 'Admin\ProductController@edit');
    Route::post('admin/product/update/{id}', 'Admin\ProductController@update');
    Route::get('admin/product/delete/{id}', 'Admin\ProductController@destroy');


    // Route::get('admin/product/create','Admin\productContrller@create')->name('product.create');
    Route::post('/admin/product/create', 'Admin\AddProductController@create')->name('product.store');


    Route::delete('admin/product/{id}/delete', 'Admin\productContrller@destroy')->name('product.destroy');
    //typeproducte
    Route::get('admin/typeproduct', 'Admin\TypeproductContrller@index')->name('typeproduct.index');
    Route::get('admin/typeproduct/create', 'Admin\TypeproductContrller@create')->name('typeproduct.create');
    Route::post('admin/typeproduct/create', 'Admin\TypeproductContrller@store')->name('typeproduct.store');
    Route::get('admin/typeproduct/{id}/edit', 'Admin\TypeproductContrller@edit')->name('typeproduct.edit');
    Route::post('admin/typeproduct/{id}/edit', 'Admin\TypeproductContrller@update')->name('typeproduct.update');
    Route::delete('admin/typeproduct/{id}/delete', 'Admin\TypeproductContrller@destroy')->name('typeproduct.destroy');

    //user
    Route::get('admin/user/index', 'Admin\UserContrller@index')->name('user.index');
    Route::get('admin/user/edituser/edit/{id}', 'Admin\UserContrller@edit');

    //homepage
    Route::get('admin/homepage/index', 'Admin\HomepageContrller@index')->name('homepage.index');
    Route::get('admin/homepage/addhomepage', 'Admin\HomepageContrller@addhomepage')->name('addhomepage');
    Route::post('admin/homepage/create', 'Admin\HomepageContrller@create')->name('addhomepage.create');
    Route::get('admin/homepage/edit/{id}', 'Admin\HomepageContrller@edit');
    Route::post('admin/homepage/update/{id}', 'Admin\HomepageContrller@update');

    Route::get('admin/homepage/del/{id}', 'Admin\HomepageContrller@del')->name('homepage.destroy');
});


Auth::routes();

Route::get('/about', 'HomeController@about');

Route::get('/home', 'HomeController@index')->name('home');

// route create
