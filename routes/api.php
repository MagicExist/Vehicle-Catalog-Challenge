<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CarController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix("cars")->group(function(){
    Route::get("",[CarController::class,'index']);
    Route::get("/{id}",[CarController::class,'show']);
    Route::post("",[CarController::class,'store']);
    Route::put("/{id}",[CarController::class,'update']);
    Route::put("/{id}/brand",[CarController::class,'UpdateBrand']);
    Route::delete("/{id}",[CarController::class,'destroy']);
});

Route::prefix("brands")->group(function(){
    Route::get("",[BrandController::class,'index']);
    Route::get("/{id}",[BrandController::class,'show']);
    Route::post("",[BrandController::class,'store']);
});