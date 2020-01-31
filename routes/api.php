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

// Route::group(['namespace' => 'Api'], function() {
//     Route::resource('Customers', 'CustomerController');
// });

Route::get('customer','CustomerController@index');
Route::post('customer','CustomerController@create');
Route::delete('customer/{id}', 'CustomerController@delete');
Route::get('customer/{id}', 'CustomerController@show');
