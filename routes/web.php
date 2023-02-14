<?php

use App\Http\Controllers\PlatesController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;
use Termwind\Components\Li;

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

//All listings
// Route::get('/')

Route::get('/plates',[PlatesController::class,'index']);

//store a plate
Route::post('/plates',[PlatesController::class,'store']);

Route::get('plates/create',[PlatesController::class,'create']);

//edit
Route::get('/plates/{plate}/edit',[PlatesController::class,'edit']);

Route::put('plates/{plate}',[PlatesController::class,'update']);
Route::delete('plates/{plate}',[PlatesController::class,'destroy']);

//create user
Route::get('/Register',[UserController::class,'create']);

//handle register post request
Route::post('/users',[UserController::class,'store']);

//user logout
Route::post('/logout',[UserController::class,'logout']);

//handle user login

Route::get('/login',[UserController::class,'login']);

// user login
Route::post('users/login',[UserController::class,'authenticate']);