@extends('layouts.app')

@section('title', 'Sistema Banco')

@section('content')

<div class="container">
    <div class="row">
        <div col-12>

            @foreach ($balance_ext as $ext)

                 <table class="table caption-top">
                
                <thead>
                  <tr>
                    <th scope="col">Registros</th>



                  </tr>
                </thead>
                <tbody>


                  <tr>


                    <td>{{ $ext->extract }}</td>





                  </tr>
                </tbody>
              </table>

              @endforeach
        </div>
    </div>
</div>


@endsection
