@extends('master')
@section('content')
<div class="  custom-product">



    <div class="col-sm-10">



                <div class="trending-wrapper">

                    <h4>Meus Pedidos</h4>

                    @foreach ($orders as $product )
                             <div class=" row searched-item cart-list-devider">
                                    <div class="col-sm-3">
                                        <a href="detail/{{$product->id  }}">
                                            <img src="{{ $product->gallery }}" class="trending-image" alt="...">

                                    </a>
                                    </div>

                                    <div class="col-sm-4">
                                        <a href="detail/{{$product->id  }}">

                                            <div class="">
                                            <h2>Nome: {{ $product->name }}</h2>
                                            <h5>Status do Delivery: {{ $product->status }}</h5>
                                            <h5>Endereço: {{ $product->address }}</h5>
                                            <h5>Status do Pagamento: {{ $product->payment_status}}</h5>
                                            <h5>Metódo do Pagamento: {{ $product->payment_method}}</h5>

                                            </div>
                                    </a>
                                    </div>



                                </div>
                    @endforeach
                    </div>



                </div>

</div>

@endsection

