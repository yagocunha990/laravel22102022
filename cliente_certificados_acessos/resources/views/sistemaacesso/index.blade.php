@extends('layouts.app')

@section('title', 'Listagem dos certificados')

{{--BOTAO PESQUISAR FIM--}}
@section('content')


<div class="container">
    <table class="table  ">
        <thead class="table-dark">
          <tr>
            <th>Razão Social / NOME</th>
            <th>Acesso</th>
            <th>Tipo</th>
            <th>Editar</th>
            <th>Deletar</th>




          </tr>
        </thead>

        <tbody>
            {{--começo listagem--}}
            @foreach ($aces as $ace )


            <tr>
                {{--tentando inicio--}}
                @foreach ($empresas as $empresa )
                    @if ($ace->id_acesso_empresa == $empresa->id)
                    <td>{{$empresa->name}}</td>
                    @endif
                @endforeach

             {{--tentando fim--}}
            <td>{{$ace->acesso}}</td>
            <td>{{$ace->anota}}</td>


            <td><a class="btn btn-primary btn-sm" href="{{route('sistemaacesso.edit',$ace->id)}}" role="button">Editar</a></td>
            <td>
                <form action="{{route('sistemaacesso.destroy', $ace->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">Deletar</button>
                </form>
            </td>

          </tr>

          @endforeach
    {{--fim listagem--}}



        </tbody>
    </table>

    
</div>
@endsection
