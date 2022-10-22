<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{CertificadoClienteController, CertificadoController, EmpressaController};

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
//ROTAS EMPRESAS INICIO
Route::get('/',[EmpressaController::class, 'index'])->name('sistemaviews.index');
//create
Route::get('/sistemaviews/create',[EmpressaController::class,'create'])->name('sistemaviews.create');
//store
Route::post('/sistemaviews/store',[EmpressaController::class,'store'])->name('sistemaviews.store');

//EDIÇÃO ROTAS
Route::get('/sistemaviews/{id}/edit',[EmpressaController::class,'edit'])->name('sistemaviews.edit');
Route::put('/sistemaviews/{id}',[EmpressaController::class,'update'])->name('sistemaviews.update');
//delete rota
Route::delete('/sistemaviews/{id}',[EmpressaController::class,'destroy'])->name('sistemaviews.destroy');

//ROTAS EMPRESAS FIM

//ROTAS ACESSO INICIO
//index
Route::get('/sistemaacesso/index',[CertificadoController::class,'index'])->name('sistemaacesso.index');
//create
Route::get('/sistemaacesso/{id}/create',[CertificadoController::class,'create'])->name('sistemaacesso.create');
//store
Route::post('/sistemaacesso/store',[CertificadoController::class,'store'])->name('sistemaacesso.store');
//edit
Route::get('/sistemaacesso/{id}/edit',[CertificadoController::class,'edit'])->name('sistemaacesso.edit');
//update sistemaacesso.update
Route::put('/sistemaacesso/{id}',[CertificadoController::class,'update'])->name('sistemaacesso.update');
//delete sistemacertificado.destroy
Route::delete('/sistemaacesso/{id}',[CertificadoController::class,'destroy'])->name('sistemaacesso.destroy');
//ROTAS ACESSO FIM

//ROTAS CERTIFICADO INICIO
//index
Route::get('/sistemacertificado/index',[CertificadoClienteController::class,'index'])->name('sistemacertificado.index');
//create sistemacertificado.create
Route::get('/sistemacertificado/{id}/create',[CertificadoClienteController::class,'create'])->name('sistemacertificado.create');
//store sistemacertificado.store
Route::post('/sistemacertificado/store',[CertificadoClienteController::class,'store'])->name('sistemacertificado.store');
//edit sistemacertificado.edit
Route::get('/sistemacertificado/{id}/edit',[CertificadoClienteController::class,'edit'])->name('sistemacertificado.edit');
//update
Route::put('/sistemacertificado/{id}',[CertificadoClienteController::class,'update'])->name('sistemacertificado.update');
//destro sistemacertificado.destroy
Route::delete('/sistemacertificado/{id}',[CertificadoClienteController::class,'destroy'])->name('sistemacertificado.destroy');
