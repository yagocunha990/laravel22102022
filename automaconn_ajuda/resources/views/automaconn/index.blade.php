@extends('layouts.app')

@section('title','Automaconn')

@section('content')
    <!--serviços seção inicio-->
    <section class="services  py-5" id="servicos">
        <div class="container-lg py-4">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center">
                        <h2 class="fw-bold mb-5 text-primary ">Qual Módulo precisa de Ajuda?</h2>
                    </div>
                </div>
            </div>

            <div class="row text-center">
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="service-item shadow-sm p-4 rounded bg-white">
                        <div class="icon my-3 text-primary fs-2">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </div>
                        <h3 class="fs-5 py-2"> <a class="text-primary text-decoration-none" href="#">Ajuda Nota de Compra</a> </h3>
                        
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="service-item shadow-sm p-4 rounded bg-white">
                        <div class="icon my-3 text-primary fs-2">
                            <i class="fas fa-calculator"></i>
                        </div>
                        <h3 class="fs-5 py-2"><a class="text-primary text-decoration-none" href="#">Ajuda Faturamento</a></h3>
                       
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="service-item shadow-sm p-4 rounded bg-white">
                        <div class="icon my-3 text-primary fs-2">
                            <i class="fas fa-image"></i>
                        </div>
                        <h3 class="fs-5 py-2"><a class="text-primary text-decoration-none" href="{{route('relatorio.index')}}">Ajuda Relatórios</a></h3>
                        
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="service-item shadow-sm p-4 rounded bg-white">
                        <div class="icon my-3 text-primary fs-2">
                            <i class="fa-solid fa-user"></i>
                        </div>
                        <h3 class="fs-5 py-2"><a class="text-primary text-decoration-none" href="#">Ajuda Cadastros</a></h3>
                       
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="service-item shadow-sm p-4 rounded bg-white">
                        <div class="icon my-3 text-primary fs-2">
                            <i class="fas fa-image"></i>
                        </div>
                        <h3 class="fs-5 py-2"><a class="text-primary text-decoration-none" href="#">SAT / NFC-E</a></h3>
                       
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="service-item shadow-sm p-4 rounded bg-white">
                        <div class="icon my-3 text-primary fs-2">
                            <i class="fas fa-image"></i>
                        </div>
                        <h3 class="fs-5 py-2"><a class="text-primary text-decoration-none" href="#">Outros</a></h3>
                        
                    </div>
                </div>
            </div>
        </div>
</section>
<!--serviços seção fim-->

@endsection