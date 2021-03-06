<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::namespace('API')->name('api.')->group(function() {

	Route::get('/products', 'ProductController@index')->name('products.all');
	Route::get('/products/{id}', 'ProductController@show')->name('products.single');

	Route::post('/products', 'ProductController@store')->name('products.store');
	Route::put('/products/{id}', 'ProductController@update')->name('products.update');
	
	Route::delete('/products/{id}', 'ProductController@delete')->name('products.delete');
});
