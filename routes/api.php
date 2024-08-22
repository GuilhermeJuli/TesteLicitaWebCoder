<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CityController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ProductController;




Route::apiResource('products', ProductController::class);
Route::apiResource('cities', CityController::class);
Route::apiResource('brands', BrandController::class);

