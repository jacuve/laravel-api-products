<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiProductController;
use App\Http\Controllers\UserController;

Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::apiResource('products', ApiProductController::class);
});

Route::post("login",[UserController::class,'index']);
