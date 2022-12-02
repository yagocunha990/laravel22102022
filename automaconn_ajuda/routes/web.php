<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{AutomaconnController,RelatorioSistemaController};

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

//SISTEMA INICIO
Route::get('/',[AutomaconnController::class, 'index'])->name('automaconn.index');

//RELATORIOS MODULOS
Route::get('/relatorio/index',[RelatorioSistemaController::class, 'index'])->name('relatorio.index');

Route::get('/relatorio/relatorio_simples_de_vendas',[RelatorioSistemaController::class, 'relatorioSimplesDeVendas'])->name('relatorio_video.relatorio_simples_de_vendas');
