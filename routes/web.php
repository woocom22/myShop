<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PolicyController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Brand API
Route::get('/BrandLists', [BrandController::class, 'BrandList']);

// Category API

Route::get('/CategoryList', [CategoryController::class, 'CategoryList']);
// API Route

// Policy API
Route::get('/PolicyList', [PolicyController::class, 'PolicyByType']);

// Product API
Route::get('/ListProductByCategory/{id}', [ProductController::class, 'ListProductByCategory']);
Route::get('/ListProductByBrand/{id}', [ProductController::class, 'ListProductByBrand']);
Route::get('/ListProductByRemark/{remark}', [ProductController::class, 'ListProductByRemark']);
Route::get('/ProductDetailsById/{id}', [ProductController::class, 'ProductDetailsById']);

// Slider API
Route::get('/ListProductBySlide', [ProductController::class, 'ListProductBySlide']);

// Product Details
Route::get('/ProductDetailsById/{id}', [ProductController::class, 'ProductDetailsById']);
Route::get('/ListReviewByProduct/{product_id}', [ProductController::class, 'ListReviewByProduct']);
