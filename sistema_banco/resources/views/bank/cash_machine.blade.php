@extends('layouts.app')

@section('title', 'Sistema Banco')

@section('content')

<div class="container">
    <div class="row">
        <div col-12>
            <div class="card" style="width: 18rem;">

                <div class="card-body">
                  <h5 class="card-title">Usuário: {{$user->name  }}</h5>
                  <h5 class="card-title">Conta: {{$user->account  }}</h5>
                  
                </div>
                <ul class="list-group list-group-flush">
                    <a class="btn btn-success btn-sm" href="/dep/{{ $user->id }}" role="button">Depositar</a>

                </ul>

                <ul class="list-group list-group-flush">
                    <a class="btn btn-warning btn-sm" href="/sac/{{ $user->id }}" role="button">Sacar</a>

                </ul>

                <ul class="list-group list-group-flush">
                    <a class="btn btn-primary btn-sm" href="/ext/{{ $user->id }}" role="button">Extrato</a>

                </ul>

              </div>

        </div>
    </div>
</div>


@endsection
