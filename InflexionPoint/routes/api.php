<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\UserApi;
use App\Http\Controllers\api\jwtController;

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


Route::apiResource('UserData',UserApi::class);
Route::controller(jwtController::class)->group(function(){
    Route::post('/login','login');
    Route::post('/register','register');
    Route::get('/logout','logout');
});

