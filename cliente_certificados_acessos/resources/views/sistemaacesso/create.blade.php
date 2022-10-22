@extends('layouts.app')

@section('title', 'Novo Acesso')

@section('content')

@include('includes.validations-form')


<div class="container pt-5">

       <form class="p-3" action="{{route('sistemaacesso.store')}}" method="POST" enctype="multipart/form-data" >
        @csrf

        <div class="my-3">
        <label class="form-label" for="">Razão Social</label>
        <input class="form-control" type="text" value="{{$empresa->name}}" readonly  >
        </div>

        <div class="my-3">
            <!--<label class="form-label" for="">ID empresa</label>-->
            <input class="form-control" type="hidden" name="id_acesso_empresa" value="{{$empresa->id}}"  >
            </div>

            <div class="my-3">
            <label class="form-label" for="">Acesso</label>
            <input class="form-control" type="text" name="acesso" >
            </div>

        <div class="my-3">
        <label class="form-label" for="">Anotações</label>
        <input class="form-control" type="text" name="anota" value="Anotação Padrão..." >
        </div>




        <div class="my-3">
        <input class="btn btn-primary" type="submit" value="Cadastrar Acesso">
        </div>
       </form>


@endsection
