<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CityController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/products', [ProductController::class, 'index'])->name('product.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('product.create');
Route::post('/products', [ProductController::class, 'store'])->name('product.store');
Route::get('/products/{cod_produto}', [ProductController::class, 'show'])->name('product.show');
Route::get('/products/{cod_produto}/edit', [ProductController::class, 'edit'])->name('product.edit');
Route::put('/products/{cod_produto}', [ProductController::class, 'update'])->name('product.update');
Route::delete('/products/{cod_produto}', [ProductController::class, 'destroy'])->name('product.destroy');

Route::get('/brand', [BrandController::class, 'index'])->name('brand.index');
Route::get('/brand/create', [BrandController::class, 'create'])->name('brand.create');
Route::post('/brand', [BrandController::class, 'store'])->name('brand.store');
Route::get('/brand/{cod_marca}', [BrandController::class, 'show'])->name('brand.show'); 
Route::get('/brand/{cod_marca}/edit', [BrandController::class, 'edit'])->name('brand.edit'); 
Route::put('/brand/{cod_marca}', [BrandController::class, 'update'])->name('brand.update'); 
Route::delete('/brand/{cod_marca}', [BrandController::class, 'destroy'])->name('brand.destroy');

Route::get('/city', [CityController::class, 'index'])->name('city.index');
Route::get('/city/create', [CityController::class, 'create'])->name('city.create');
Route::post('/city', [CityController::class, 'store'])->name('city.store');
Route::get('/city/{cod_cidade}', [CityController::class, 'show'])->name('city.show');
Route::get('/city/{cod_cidade}/edit', [CityController::class, 'edit'])->name('city.edit');
Route::put('/city/{cod_cidade}', [CityController::class, 'update'])->name('city.update');
Route::delete('/city/{cod_cidade}', [CityController::class, 'destroy'])->name('city.destroy');
