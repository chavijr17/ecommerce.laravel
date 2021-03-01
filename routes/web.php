<?php

use Illuminate\Support\Facades\Route;
use App\Http\Conttrollers\UserController;
use App\Http\Conttrollers\ProductController;

Route::get('/login', function () {
    return view('login');
});

Route::post("/login",[UserController::class,'login']);
Route::get("/",[ProductController::class,'index']);