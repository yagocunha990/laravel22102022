<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title') Sistema Clientes</title>
    <!-- CSS style -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


</head>

<body>
    {{--NAVBAR INICIO--}}
    <div class="container" >
        <nav class="navbar navbar-expand-md navbar-light " >
            <a href="#" class="navbar-brand">

            <span class="hidden"> Automaconn </span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#toggleMobileMenu" aria-controls="toggleMobileMenu" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="toggleMobileMenu">
              <ul class=" navbar-nav  text-center">
                <li>
                  <a class="nav-link" href="{{route('sistemaviews.index')}}">Início</a>
                </li>

                <li>
                  <a class="nav-link" href="{{route('sistemacertificado.index')}}">Certificados</a>
                </li>

                <li>
                  <a class="nav-link" href="{{route('sistemaacesso.index')}}">Acessos</a>
                </li>
              </ul>
            </div>
        </nav>
    </div>
{{--NAVBAR FIM--}}

@yield('content')


  {{--  <div class="">
        <form action="{{route('logout')}}" method="post">
            @csrf
            <button type="submit">Logout</button>
        </form>
        @yield('content')
    </div>
--}}
 <!-- Option 1: Bootstrap Bundle with Popper -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
