@extends('layouts.app')

@section('title', 'Sistema Banco')

@section('content')

<div class="container">
    <div class="row">
        <div col-12>

            @foreach ($users_bank as $user_bank)

                 <table class="table caption-top">
                <caption>Lista de Usuarios</caption>
                <thead>
                  <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Conta</th>
                    <th scope="col">Caixa Eletronico</th>


                  </tr>
                </thead>
                <tbody>


                  <tr>


                    <td>{{ $user_bank->name }}</td>

                    <td>{{ $user_bank->account }}</td>
                    <td><a class="btn btn-primary btn-sm" href="/cash_machine/{{$user_bank->id}}" role="button">Caixa Eletronico</a></td>




                  </tr>
                </tbody>
              </table>

              @endforeach
        </div>
    </div>
</div>


@endsection
