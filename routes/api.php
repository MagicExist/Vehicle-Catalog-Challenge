<?php

use App\Http\Controllers\CarController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix("cars")->group(function(){
    Route::get("",[CarController::class,'index']);
    Route::get("/{id}",[CarController::class,'show']);
});