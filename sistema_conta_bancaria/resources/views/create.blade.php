@extends('master')
@section('content')
<div class="container custom-login">
  <div class="row justify-content-center">

  


    <div class="col-sm-6   ">
          <form action="/store" method="POST">
            @csrf
            <div class="form-group">
              <label for="exampleInputEmail1" class="form-label">Nome</label>
              <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

              <div class="form-group">
              <label for="exampleInputPassword1" class="form-label">Email</label>
              <input type="e-mail" name="email" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1" class="form-label">Endereço</label>
                <input type="text" name="address" class="form-control" id="exampleInputPassword1">
              </div>

              <div class="form-group">
                <label for="exampleInputPassword1" class="form-label">Senha</label>
                <input type=" password" name=" password" class="form-control" id="exampleInputPassword1">
              </div>


              <div class="form-group">
                <label for="exampleInputPassword1" class="form-label">CPF</label>
                <input type="text" name="cpf" class="form-control" id="exampleInputPassword1">
              </div>






              <button type="submit" style="margin-top:15px; " class="btn btn-primary">Cadastrar</button>
         </form>
    </div>
  </div>
</div>

@endsection

