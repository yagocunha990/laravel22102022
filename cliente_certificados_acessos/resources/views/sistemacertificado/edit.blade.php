@extends('layouts.app')

@section('title', "Editar Certificado")

@section('content')

@include('includes.validations-form')


<div class="container pt-5">

       <form class="p-3" action="{{route('sistemacertificado.update', $certificado->id)}}" method="POST" enctype="multipart/form-data" >
        @method('PUT')
        @csrf

        @include('partials.editcertificadoinputform')

       </form>


@endsection
