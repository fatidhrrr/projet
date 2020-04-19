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

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');

// Route des blades templates

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/about', 'AboutController@index')->name('about');

Route::get('/products', 'ProductController@index')->name('products');

Route::get('/store', 'StoreController@index')->name('store');

Route::get('/contact', 'ContactController@index')->name('contact');


// Header

Route::resource('header', 'HeaderController');

// Admin - Role

Route::resource('admin', 'AdminController');

Route::resource('role', 'RolesController');

// Product

Route::resource('product', 'ProductController');
Route::get('productview', 'ProductController@indexview');
Route::post('/update/{id}', "ProductController@update")->name("updateproduct");
Route::get('/editproduct/{id}', "ProductController@edit")->name("editproduct");
Route::get("/deleteproduct/{id}", "ProductController@destroy")-> name("deleteproduct");

// About 

Route::resource('about', 'AboutController');
Route::get('aboutview', 'AboutController@indexview');

// Contact

Route::resource('contact', 'ContactController');
Route::get('contactview', 'ContactController@indexview');

// Mail

Route::post('/contactmail', 'MailController@store')->name('contactmail');