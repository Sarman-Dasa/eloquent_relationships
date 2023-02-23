<?php

use App\Http\Controllers\CityController;
use App\Http\Controllers\HasmanythroughController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::controller(CityController::class)->group(function(){
    Route::get('country','index')->name('country.index');
    Route::get('city','showCity')->name('city.index');
    Route::get('country/{id}','showCountryCity')->name('city.show');
    Route::get('city/{id}','showCountry')->name('country.show');
});

Route::get('order/{id}',[HasmanythroughController::class,'show']);