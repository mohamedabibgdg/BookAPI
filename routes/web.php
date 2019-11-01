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

Route::group(['middleware' => 'auth'], function () {

    Route::resource('category','CategoryController');
    Route::resource('books','BookController');
    Route::resource('parts','PartController');

});
/**
  php artisan make:resource UserCollection --collection
  php artisan make:resource UserResource
  php artisan make:resource CategoryCollection --collection
  php artisan make:resource CategoryResource
  php artisan make:resource BookCollection --collection
  php artisan make:resource BookResource
  php artisan make:resource PartCollection --collection
  php artisan make:resource PartResource

 */
