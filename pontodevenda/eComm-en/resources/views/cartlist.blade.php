@extends('master')
@section('content')
<div class="  custom-product">



    <div class="col-sm-10">



                <div class="trending-wrapper">

                    <h4>Resultado dos Produtos</h4>
                    <a class="btn btn-success" href="/ordernow">Compre Agora</a> <br><br>
                    @foreach ($products as $product )
                             <div class=" row searched-item cart-list-devider">
                                    <div class="col-sm-3">
                                        <a href="detail/{{$product->id  }}">
                                            <img src="{{ $product->gallery }}" class="trending-image" alt="...">

                                    </a>
                                    </div>

                                    <div class="col-sm-4">
                                        <a href="detail/{{$product->id  }}">

                                            <div class="">
                                            <h2>{{ $product->name }}</h2>
                                            <h5>{{ $product->description }}</h5>

                                            </div>
                                    </a>
                                    </div>

                                    <div class="col-sm-3">
                                       <a href="/removecart/{{$product->cart_id  }}" class="btn btn-warning">Remover do Carrinho</a>
                                    </div>


                                </div>
                    @endforeach
                    </div>

                   

                </div>

</div>

@endsection

