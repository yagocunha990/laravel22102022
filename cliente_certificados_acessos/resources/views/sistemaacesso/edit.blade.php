@extends('layouts.app')

@section('title', "Editar Acesso")

@section('content')

@include('includes.validations-form')


<div class="container pt-5">

       <form class="p-3" action="{{route('sistemaacesso.update', $ace->id)}}" method="POST" enctype="multipart/form-data" >
        @method('PUT')
        @csrf

        @foreach ($empresas as $empresa )
            @if ($empresa->id == $ace->id_acesso_empresa)
                    <div class="my-3">
        <label class="form-label" for="">Razão Social</label>
        <input class="form-control" type="text"  value="{{$empresa->name}}" readonly >
        </div>
            @endif
        @endforeach

        <div class="my-3">

            <input class="form-control" type="hidden" name="id_acesso_empresa" value="{{$ace->id_acesso_empresa}}" >
            </div>

        <div class="my-3">
        <label class="form-label" for="">Acesso</label>
        <input class="form-control" type="text" name="acesso" value="{{$ace->acesso}}" >
        </div>

        <div class="my-3">
            <label class="form-label" for="">Anotação</label>
            <input class="form-control" type="text" name="anota" value="{{$ace->anota}}" >
            </div>



        <div class="my-3">
        <input class="btn btn-primary" type="submit" value="Editar">
        </div>
       </form>


@endsection
