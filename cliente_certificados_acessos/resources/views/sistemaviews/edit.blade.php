@extends('layouts.app')

@section('title', "Editar Empresa {{$empresa->name}}")

@section('content')

@include('includes.validations-form')


<div class="container pt-5">

       <form class="p-3" action="{{route('sistemaviews.update', $empresa->id)}}" method="POST" enctype="multipart/form-data" >
        @method('PUT')
        @csrf
        <div class="my-3">
        <label class="form-label" for="">Razão Social</label>
        <input class="form-control" type="text" name="name" value="{{$empresa->name}}" >
        </div>

        <div class="my-3">
        <label class="form-label" for="">CNPJ/CPF</label>
        <input class="form-control" type="text" name="cnpj" value="{{$empresa->cnpj}}" >
        </div>




        <div class="my-3">
        <input class="btn btn-primary" type="submit" value="Cadastrar">
        </div>
       </form>


@endsection
