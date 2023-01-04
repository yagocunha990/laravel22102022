@extends('master')
@section('content')
<div class=" container">
    <div class="row">
            <div class="col-sm-6">
                <img class="detail-img" src="{{$product->gallery  }}" alt="" >
            </div>
            <div class="col-sm-6">
                <a href="/">Voltar</a>
                <h2>{{$product->name}}</h2>
                <h3>Preço: {{$product->price  }}</h3>
                <h4>Descrição: {{$product->description  }}</h4>
                <h4>Categoria: {{$product->category }}</h4>
                <br><br>
                <button class="btn btn-primary">Adicionar ao Carrinho</button>
                <br><br>
                <button class="btn btn-success">Comprar Agora</button>
                <br><br>


            </div>
    </div>


</div>

@endsection

