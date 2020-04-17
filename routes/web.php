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

Route::get('/', 'WelcomeController@index');

Auth::routes();

// 

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/index', 'IndexController@index')->name('index');

Route::get('/about', 'AboutController@index')->name('about');

Route::get('/products', 'ProductController@index')->name('products');

Route::get('/store', 'StoreController@index')->name('store');

// Photo

Route::get('/photos',"IndexController@index")->name("photos");
Route::get('/editPhotos/{id}', "IndexController@edit")->name('editPhotos');
Route::post('/updatePhotos/{id}', "IndexController@update")->name("updatePhotos");