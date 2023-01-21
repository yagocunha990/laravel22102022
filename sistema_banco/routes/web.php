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

Route::get('/',[UserController::class, 'bank_index'])->name('bank.index');

Route::get('/index',[UserController::class, 'index'])->name('users.index');

Route::get('/create',[UserController::class, 'create'])->name('users.create');

Route::post('/store',[UserController::class, 'store'])->name('users.store');

Route::get('/edit/{id}',[UserController::class, 'edit'])->name('users.edit');

Route::post('/update/{id}',[UserController::class, 'update'])->name('users.update');

Route::post('/destroy/{id}',[UserController::class, 'destroy'])->name('users.destroy');

//////rotas banco
Route::get('/cash_machine/{id}',[UserController::class, 'cash_machine'])->name('bank.cash_machine');

Route::get('/dep/{id}',[UserController::class, 'dep'])->name('bank.dep');
Route::post('/dep',[UserController::class, 'dep_fn'])->name('bank.dep_fn');

Route::get('/sac/{id}',[UserController::class, 'sac'])->name('bank.sac');
Route::post('/sac',[UserController::class, 'sac_fn'])->name('bank.sac_fn');


Route::get('/ext/{id}',[UserController::class, 'ext'])->name('bank.ext');


