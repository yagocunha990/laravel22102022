<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){


        $conta =0;
        $query = Produto::query();

        if($request->has('nome')){
            $query->where('nome', 'LIKE', '%' . $request->nome .'%');
        }

        $produtos = $query->get();

        //dd($produtos);

        return view('produtos.index',compact('produtos','conta'));
    }

    public function outroindex(Request $request){


       
        $produtos = Produto::get();

        

        return view('produtos.outroindex',compact('produtos'));
    }

    public function error(){
        return 'error';
        //return view('produtos.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('produtos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $produto = new Produto;
        $produto->nome = $request->nome;
        $produto->marca = $request->marca;
        $produto->qtd = $request->qtd;
        $produto->vencimento = $request->vencimento;
        $produto->save();

        return 'salvou deu certo';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
