<?php

use Illuminate\Http\Request;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
// Category
Route::get('category','CategoryAPIController@index');
Route::post('category','CategoryAPIController@store');
Route::get('category/{category}','CategoryAPIController@show');
Route::post('category/update/{category}','CategoryAPIController@update');
Route::post('category/delete/{category}','CategoryAPIController@destroy');

// Book
Route::get('book','BookAPIController@index');
Route::post('book','BookAPIController@store');
Route::get('book/{book}','BookAPIController@show');
Route::post('book/update/{book}','BookAPIController@update');
Route::post('book/delete/{book}','BookAPIController@destroy');

// Part
Route::get('part','PartAPIController@index');
Route::post('part','PartAPIController@store');
Route::get('part/{part}','PartAPIController@show');
Route::post('part/update/{part}','PartAPIController@update');
Route::post('part/delete/{part}','PartAPIController@destroy');

// one Data
// return new UserResource(User::find(1));

// many data return UserResource::collection(User::all());
