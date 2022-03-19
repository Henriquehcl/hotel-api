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
//definindo as rotas
Route::get("hotels/","App\Http\Controllers\HotelController@listAll");
Route::get("hotel/{id}","App\Http\Controllers\HotelController@getHotel");
Route::post("hotel/","App\Http\Controllers\HotelController@createHotel");
Route::put("hotel/{id}","App\Http\Controllers\HotelController@updateHotel");
Route::delete("hotel/{id}","App\Http\Controllers\HotelController@deleteHotel");

