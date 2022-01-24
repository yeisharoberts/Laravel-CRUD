<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//postmann
Route::get('/customers',[CustomerController::class,'index']);
Route::get('/customers/{customer}/edit',[CustomerController::class,'edit']);
Route::put('/customers/{customer}',[CustomerController::class,'update']);
Route::delete('/customers/{customer}',[CustomerController::class,'destroy']);
Route::get('/customers/{customer}/show',[CustomerController::class,'show']);
Route::post('/customers',[CustomerController::class,'store']);
Route::get('/customers/{customer}/show',[CustomerController::class,'show']);