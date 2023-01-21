@extends('layouts.app')

@section('title', 'Sistema Banco')

@section('content')

<div class="container">
    <div class="row">
        <div col-12>

            @foreach ($users as $user)

                 <table class="table caption-top">
                <caption>Lista de Usuarios</caption>
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Conta</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Deletar</th>
                  </tr>
                </thead>
                <tbody>


                  <tr>

                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->account }}</td>
                    <td><a class="btn btn-warning btn-sm" href="/edit/{{$user->id}}" role="button">Editar</a></td>

                    <form action="/destroy/{{ $user->id }}" method="POST">
                        @csrf
                        <td><button class="btn btn-danger btn-sm">Deletar</button></td>

                    </form>

                  </tr>
                </tbody>
              </table>

              @endforeach
        </div>
    </div>
</div>


@endsection
