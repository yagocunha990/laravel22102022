@extends('layouts.app')

@section('title', 'Listagem das empresas')

@section('content')


{{--caso tenha certificados vencidos mostrar o alert--}}
    @foreach ($certificadosvencidos as $certificadosvencido )
            <?php
            $datavencimento = date('d/m/y', strtotime($certificadosvencido->validade_certificado));
            $dataatual = date('d/m/y');

            if ($datavencimento <= $dataatual) {?>
            @foreach ($empresas as $empresa)
               @if ($certificadosvencido->id_certificado_cliente == $empresa->id)
                        <div class="alert alert-danger" role="alert">
                            Certificado {{$certificadosvencido->certificado_name}} || {{date('d/m/y', strtotime($certificadosvencido->validade_certificado));}}  {{$empresa->name}}  estar perto de vencer, ou  vencido!!!" <br>
                        </div>
               @endif
            @endforeach
            <?php
            }


            ?>
      @endforeach
      {{-- FIMcaso tenha certificados vencidos mostrar o alert--}}

      <div class="container">
    <table class="table  ">
        <thead class="table-dark">

            <tr>

            <th>Razão Social / NOME</th>
            <th>CNPJ / CPF</th>

            <th>Editar</th>
            <th>Deletar</th>
            <th>Certificado</th>
            <th>Acesso</th>

            <th> <a class="btn btn-primary btn-sm" href="{{route('sistemaviews.create')}}" role="button">+</a></th>

          </tr>
        </thead>

        <tbody>
            {{--começo listagem--}}
            @foreach ($empresas as $empresa )



            <tr>
            <td>{{$empresa->name}}</td>
            <td>{{$empresa->cnpj}}</td>


            <td><a class="btn btn-primary btn-sm" href="{{route('sistemaviews.edit',$empresa->id)}}" role="button">Editar</a></td>
            <td>
                <form action="{{route('sistemaviews.destroy', $empresa->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">Deletar</button>
                </form>
            </td>
            <td><a class="btn btn-success btn-sm" href="{{route('sistemacertificado.create', $empresa->id)}}" role="button">+</a></td>
            <td><a class="btn btn-success btn-sm" href="{{route('sistemaacesso.create',$empresa->id)}}" role="button">+</a></td>
          </tr>

          @endforeach
    {{--fim listagem--}}



        </tbody>
    </table>
</div>



@endsection
