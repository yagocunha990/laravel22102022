@extends('layouts.app')

@section('title', 'Listagem dos certificados')

@section('content')
<div class="container">
    <table class="table  ">
        <thead class="table-dark">
          <tr>
            <th>Razão Social / NOME</th>
            <th>Tipo</th>
            <th>Validade</th>
            <th>Editar</th>
            <th>Deletar</th>




          </tr>
        </thead>

        <tbody>

            {{--começo listagem--}}
            @foreach ($certificados as $certificado )


            <tr>
                {{--tentando inicio--}}
                @foreach ($empresas as $empresa )
                    @if ($certificado->id_certificado_cliente == $empresa->id)
                    <td>{{$empresa->name}}</td>
                    @endif
                @endforeach

             {{--tentando fim--}}
            <td>{{$certificado->certificado_name}}</td>
            {{--converter data para o formato brasileiro--}}
            <td>{{date('d/m/y',strtotime($certificado->validade_certificado));}}</td>


            <td><a class="btn btn-primary btn-sm" href="{{route('sistemacertificado.edit',$certificado->id)}}" role="button">Editar</a></td>
            <td>
                <form action="{{route('sistemacertificado.destroy', $certificado->id)}}" method="POST">
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
