<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\WeatherController::class, 'index']);
Route::post('/', [App\Http\Controllers\WeatherController::class, 'search_weather']);