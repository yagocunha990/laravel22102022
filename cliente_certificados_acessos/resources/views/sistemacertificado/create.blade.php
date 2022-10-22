@extends('layouts.app')

@section('title', 'Novo Certificado')

@section('content')

@include('includes.validations-form')


<div class="container pt-5">

       <form class="p-3" action="{{route('sistemacertificado.store')}}" method="POST" enctype="multipart/form-data" >
        @csrf

        <div class="my-3">
        <label class="form-label" for="">Razão Social</label>
        <input class="form-control" type="text" value="{{$empresa->name}}" readonly  >
        </div>

        <div class="my-3">
            <!--<label class="form-label" for="">ID empresa</label>-->
            <input class="form-control" type="hidden" name="id_certificado_cliente" value="{{$empresa->id}}"  >
            </div>

            <div class="my-3">
                <label class="form-label" for="">Tipo Certificado</label>
            <select class="form-select" aria-label="Default select example" name="certificado_name" id="">
                <option value="E-CNPJ A1 1 ANO" selected>E-CNPJ A1 1 ANO</option>
                <option value="E-CPF A1 1 ANO" >E-CPF A1 1 ANO</option>
                <option value="E-CNPJ A3 CARTÃO 1 ANO" >E-CNPJ A3 CARTÃO 1 ANO</option>
                <option value="E-CNPJ A3 CARTÃO 2 ANO" >E-CNPJ A3 CARTÃO 2 ANO</option>
                <option value="E-CNPJ A3 CARTÃO 3 ANO" >E-CNPJ A3 CARTÃO 3 ANO</option>
                <option value="E-CPF A3 CARTÃO 1 ANO" >E-CPF A3 CARTÃO 1 ANO</option>
                <option value="E-CPF A3 CARTÃO 2 ANO" >E-CPF A3 CARTÃO 2 ANO</option>
                <option value="E-CPF A3 CARTÃO 3 ANO" >E-CPF A3 CARTÃO 3 ANO</option>
                <option value="E-CNPJ A3 TOKEN 1 ANO" >E-CNPJ A3 TOKEN 1 ANO</option>
                <option value="E-CNPJ A3 TOKEN 2 ANO" >E-CNPJ A3 TOKEN 2 ANO</option>
                <option value="E-CNPJ A3 TOKEN 3 ANO" >E-CNPJ A3 TOKEN 3 ANO</option>
                <option value="E-CPF A3 TOKEN 1 ANO" >E-CPF A3 TOKEN 1 ANO</option>
                <option value="E-CPF A3 TOKEN 2 ANO" >E-CPF A3 TOKEN 2 ANO</option>
                <option value="E-CPF A3 TOKEN 3 ANO" >E-CPF A3 TOKEN 3 ANO</option>

            </select>
            </div>

        <div class="my-3">
        <label class="form-label" for="">Validade Certificado</label>
        <input class="form-control" type="date" name="validade_certificado" required>
        </div>




        <div class="my-3">
        <input class="btn btn-primary" type="submit" value="Cadastrar Certificado">
        </div>
       </form>


@endsection
