<?php

namespace App\Http\Controllers;

use App\Models\Acesso;
use App\Models\Empresa;
use Illuminate\Http\Request;

class CertificadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){
          //variavel para contar se não teve exito a busca
        $empresas = Empresa::all();
        $aces = Acesso::all();
        return view('sistemaacesso.index',compact('aces','empresas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id){

        if(!$empresa = Empresa::find($id))
        return redirect()->route('sistemaviews.index');


        return view('sistemaacesso.create',compact('empresa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $request->validate([
            'acesso' => 'required',
            'anota' =>'required',
            'id_acesso_empresa' => 'required',
        ]);

        $data = $request->all();
        Acesso::create($data);

        return redirect()->route('sistemaviews.index');
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
    public function edit($id){
        $empresas = Empresa::all();
        if (!$ace = Acesso::find($id)){
        return redirect()->route('sistemaacesso.index');
    }


    return view('sistemaacesso.edit', compact('ace','empresas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        if(!$ace = Acesso::find($id)){
         return redirect()->route('sistemaacesso.index');
        }
        $data = $request->all();

        $ace->update($data);
       return redirect()->route('sistemaacesso.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
       if (!$acesso = Acesso::find($id)) {
            return redirect()->route('sistemaacesso.index');
       }

       $acesso->delete();

       return redirect()->route('sistemaacesso.index');
    }
}
