<?php

namespace App\Http\Controllers;

use App\Models\Certificado;
use App\Models\Empresa;
use Illuminate\Http\Request;

class CertificadoClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $empresas = Empresa::all();
        $certificados = Certificado::all();
        return view('sistemacertificado.index',compact('empresas','certificados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id){
        if (!$empresa = Empresa::find($id)) {
            return redirect()->route('sistemaviews.index');
        }

        return view('sistemacertificado.create', compact('empresa'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        $request->validate([
         'certificado_name' =>'required',
         'validade_certificado' =>'required',
         'id_certificado_cliente' => 'required',
        ]);



        $data = $request->all();

 

        Certificado::create($data);

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
        if (!$certificado = Certificado::find($id)){
        return redirect()->route('sistemaacesso.index');
    }

    return view('sistemacertificado.edit', compact('empresas','certificado'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id){
        if (!$certificado = Certificado::find($id)) {
            return redirect()->route('sistemacertificado.index');
        }

        $data = $request->all();



        $certificado->update($data);
        return redirect()->route('sistemacertificado.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        if (!$certificado = Certificado::find($id)) {
            return redirect()->route('sistemacertificado.index');
        }
        $certificado->delete();

        return redirect()->route('sistemacertificado.index');
    }
}
