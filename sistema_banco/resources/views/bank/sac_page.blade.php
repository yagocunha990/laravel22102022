@extends('layouts.app')

@section('title', 'Sistema Banco')

@section('content')


<div class="container">
    <div class="row">

        <div class="col-6">

            <form action="/sac" method="POST"  enctype="multipart/form-data">
                @csrf()

                @include('includes.validations-form')

                <div class="row mb-3">
                  <label for="inputEmail3" class="col-sm-2 col-form-label">Valor do Saque</label>
                  <div class="col-sm-10">
                    <input type="text" name="value" class="form-control" id="inputEmail3">
                  </div>
                </div>

                <input type="hidden" name="user_id" value="{{ $user_id }}" class="form-control" id="inputEmail3">




                <button type="submit" class="btn btn-primary">Sacar</button>
              </form>

        </div>
      </div>
</div>


@endsection
