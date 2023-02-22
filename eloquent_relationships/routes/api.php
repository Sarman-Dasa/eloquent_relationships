<?php

use App\Http\Controllers\CapitalController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\IndexController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


//-------------------// One To One Relationships //----------------------//

Route::apiResource('capital',CapitalController::class);
Route::apiResource("country",CountryController::class);


Route::controller(IndexController::class)->group(function(){
    Route::get('index/country/{id}','getCountryData');
    Route::get('index/capital/{id}','getCapitalData');
    Route::get('index/both/{id}','getBothData');
});