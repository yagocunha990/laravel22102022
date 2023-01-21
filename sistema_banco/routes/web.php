<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{ UserController};

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

Route::get('/index',[UserController::class, 'index'])->name('users.index');

Route::get('/create',[UserController::class, 'create'])->name('users.create');

Route::post('/store',[UserController::class, 'store'])->name('users.store');

Route::get('/edit/{id}',[UserController::class, 'edit'])->name('users.edit');

Route::post('/update/{id}',[UserController::class, 'update'])->name('users.update');

Route::post('/destroy/{id}',[UserController::class, 'destroy'])->name('users.destroy');




