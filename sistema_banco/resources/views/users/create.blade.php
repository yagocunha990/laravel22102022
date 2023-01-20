@extends('layouts.app')

@section('title', 'Sistema Banco')

@section('content')


<div class="container">
    <div class="row">

        <div class="col-6">

            <form action="/store" method="POST">
                @csrf()

                @include('includes.validations-form')

                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Nome</label>
                  <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" id="inputEmail3">
                  </div>
                </div>

                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Endereço</label>
                    <div class="col-sm-10">
                      <input type="text" name="address" class="form-control" id="inputEmail3">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                      <input type="email" name="email" class="form-control" id="inputEmail3">
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">CPF</label>
                    <div class="col-sm-10">
                      <input type="text" name="cpf" minlength="11" maxlength="11" class="form-control" id="inputEmail3">
                    </div>
                  </div>
                <div class="row mb-3">
                  <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                  <div class="col-sm-10">
                    <input type="password" name="password" class="form-control" id="inputPassword3">
                  </div>
                </div>


                <button type="submit" class="btn btn-primary">Cadastrar</button>
              </form>

        </div>
      </div>
</div>


@endsection
