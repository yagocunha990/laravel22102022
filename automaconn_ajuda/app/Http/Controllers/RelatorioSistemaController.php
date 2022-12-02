<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RelatorioSistemaController extends Controller{
    
    public function index(){
        return view('relatorio.index');
    }

    public function relatorioSimplesDeVendas(){
        return view('relatorio_video.relatorio_simples_de_vendas');
    }
}
