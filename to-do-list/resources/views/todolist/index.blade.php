@extends('layouts.app')

@section('title','Listagens das Notas')

@section('content')
   <!--contact section inicio-->
   <section class="contact py-2" id="contatos">
    <div class="container-lg py-1">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="section-title text-center">
                    <h2 class="fw-bold mb-5">Notas</h2>
                </div>
            </div>
        </div>

        <div class="row ">
            <div class="col-md-4" >
                


                <div class="contact-form">
                    <form action="">
                        <div class="row">
                            <div class="col-lg-12 mb-4">
                                <input class="form-control form-control-lg fs-6 border-0 shadow-sm" type="text" placeholder="Título" name="" id="">
                            </div>
                           
                        </div>
                       
                        <div class="row">
                            <div class="col-lg-12 mb-4">
                                <textarea class="form-control form-control-lg fs-6 border-0 shadow-sm" rows="5" placeholder="Sua Anotação"></textarea>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                    <button type="submit" class="btn btn-success px-3">Salvar</button>
                            </div>
                        </div>
                    </form>
            </div>

            </div>

            <div class="col-md-8">
                <div class="contact-item d-flex mb-3">
                    <div class="icon fs-4 text-primary">
                        <i class="fas fa-envelope"></i>
                    </div>

                    <div class="text ms-3">
                        <h3 class="fs-5">Nota1</h3>
                        <p class="text-muted m">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Corporis laborum similique eaque accusamus laudantium minus neque iusto, 
                            a omnis sapiente at porro dolor iste eligendi, harum ipsam dignissimos sequi ipsum.</p>
                            <a href="#" class="btn  btn-warning btn-sm ">Alterar</a>
                            <a href="#" class="btn  btn-danger btn-sm ">Deletar</a>

                    </div>
                </div>
            </div>
           
        </div>
    </div>

</section>
<!--contact section fim-->
@endsection