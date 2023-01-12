<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

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



//USER CONTROLLER
Route::post("/login",[UserController::class,'login']);

//LOGOUT E LOGIN
Route::get("/logout",[UserController::class,'logout']);
Route::get('/login', function () {
    return view('login');
});

//PRODUCT CONTROLLER
Route::get("/",[ProductController::class,'index']);
Route::get("/detail/{id}",[ProductController::class,'detail']);
///PRODUCT CART
Route::post("/add_to_cart",[ProductController::class,'addToCart']);
Route::get("/cartlist",[ProductController::class,'cartList']);
Route::get("/removecart/{id}",[ProductController::class,'removeCart']);




