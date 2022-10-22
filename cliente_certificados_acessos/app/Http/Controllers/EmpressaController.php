<?php

namespace App\Http\Controllers;

use App\Models\Certificado;
use App\Models\Empresa;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class EmpressaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        //variavel para contar se não teve exito a busca

        $certificadosvencidos = Certificado::get();
        $empresas = Empresa::all();
        return view('sistemaviews.index',compact('empresas','certificadosvencidos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('sistemaviews.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){

       $request->validate([
        'name' => 'required',
        'cnpj' =>['required','min:11','max:15','unique:empresas,cnpj',],
       ]);

        $data = $request->all();

        Empresa::create($data);

        return redirect()->route('sistemaviews.index');




    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function show(Empresa $empresa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        if(!$empresa = Empresa::find($id))
        return redirect()->route('sistemaviews.index');


        return view('sistemaviews.edit',compact('empresa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        if(!$empresa = Empresa::find($id));
        return redirect()->route('sistemaviews.index');

        $data = $request->all();
        $empresa->update($data);
        return redirect()->route('sistemaviews.index');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        if(!$empresa = Empresa::find($id))
        return redirect()->route('sistemaviews.index');

        $empresa->delete();

        return redirect()->route('sistemaviews.index');
    }
}
