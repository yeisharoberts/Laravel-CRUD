<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//List
Route::get('/customers',[CustomerController::class,'index']);
//Edit
Route::get('/customers/{customer}/edit',[CustomerController::class,'edit']);
//Create
Route::get('/customers/create',[CustomerController::class,'create']);
//Storing val 
Route::post('/customers',[CustomerController::class,'store']);
//Update val
Route::put('/customers/{customer}',[CustomerController::class,'update']);
//Delete
Route::delete('/customers/{customer}',[CustomerController::class,'destroy']);
//Based on id
Route::get('/customers/{customer}/show',[CustomerController::class,'show']);