<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReviewsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('/products', ProductController::class);

Route::group(['prefix'=>'products'], function(){
    Route::apiResource('/{produt}/reviews',ReviewsController::class);
});
