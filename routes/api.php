<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\GuestController;



Route::post('/register',[AuthController::class,'register']);
Route::post('/login',[AuthController::class,'login']);
Route::post('/guest',[GuestController::class,'store']);
Route::get('/guests',[GuestController::class,'index']);
Route::get('/guest/search/{name}', [GuestController::class,'search']);
Route::delete('/guest/{id}', [GuestController::class,'destroy']);
Route::post('/logout',[AuthController::class,'logout']);
Route::put('/guest/{id}', [GuestController::class,'update']);
Route::put('/guest/{id}/approve', 
[GuestController::class,'approve']);
Route::get('/dashboard',
[GuestController::class,'dashboard']);
Route::middleware('auth:sanctum')->post('/logout',
    [AuthController::class,'logout']);