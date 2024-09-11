<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//route resource for products
Route::resource('/products',\App\Http\Controllers\ProductController::class);
Route::resource('/supplier', \App\Http\Controllers\SupplierController::class);
