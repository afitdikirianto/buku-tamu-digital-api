<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginPageController;
use App\Http\Controllers\RegisterPageController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', [LoginPageController::class,'index']);
Route::get('/register',
[RegisterPageController::class,'index']);