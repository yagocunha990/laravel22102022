<?php

use App\Http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Route;

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

Route::get('/products',[ProdutoController::class,'index'])->name('produtos.index');

Route::get('/productsoutroindex',[ProdutoController::class,'outroindex'])->name('produtos.outroindex');

Route::get('/productserrors',[ProdutoController::class,'error'])->name('produtos.error');

Route::get('/productscreate',[ProdutoController::class,'create'])->name('produtos.create');

Route::post('/productsstore',[ProdutoController::class,'store'])->name('produtos.store');
