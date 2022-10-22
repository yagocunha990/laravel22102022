@extends('layouts.app')

@section('title', 'Nova Empresa')

@section('content')

@include('includes.validations-form')


<div class="container pt-5">

       <form class="p-3" action="{{route('sistemaviews.store')}}" method="POST" enctype="multipart/form-data" >
        @csrf
        <div class="my-3">
        <label class="form-label" for="">Razão Social</label>
        <input class="form-control" type="text" name="name" >
        </div>

        <div class="my-3">
        <label class="form-label" for="">CNPJ/CPF</label>
        <input class="form-control" type="text" name="cnpj" >
        </div>




        <div class="my-3">
        <input class="btn btn-primary" type="submit" value="Cadastrar">
        </div>
       </form>


@endsection
