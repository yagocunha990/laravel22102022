@extends('master')
@section('content')
<div class="container custom-login">
  <div class="row justify-content-center">

    <div class="col-sm-4   ">
          <form action="login" method="POST">
            @csrf
            <div class="form-group">
              <label for="exampleInputEmail1" class="form-label">E-mail</label>
              <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

              <div class="form-group">
              <label for="exampleInputPassword1" class="form-label">Senha</label>
              <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            </div>



              <button type="submit" style="margin-top:15px; " class="btn btn-primary">Entrar</button>
         </form>
    </div>
  </div>
</div>

@endsection

