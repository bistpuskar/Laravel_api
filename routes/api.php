<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::get('country','countryController@country');
// Route::get('country/{id}','countryController@countryById');
// Route::post('country','countryController@countrySave');
// Route::put('country/{id}','countryController@countryUpdate');
// Route::delete('country/{id}','countryController@countryDelete');


// Route::group(['middleware'=>'auth:api'], function(){

// Route::apiResource('country','country\country');
// });

Route::apiResource('country','country\country');
Route::get('file/country_list', 'fileController@countryList');
Route::post('file/country_list', 'fileController@countrySave');