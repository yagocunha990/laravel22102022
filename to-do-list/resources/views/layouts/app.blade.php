<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title') Sistema de Notas</title>
    <!-- CSS style -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">


</head>

<body>
    {{--NAVBAR INICIO--}}
    <div class="container" >
        <nav class="navbar navbar-expand-md navbar-light " >
            <a href="#" class="navbar-brand">

            <span class="hidden"> Lista de Anotações </span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#toggleMobileMenu" aria-controls="toggleMobileMenu" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span></button>
           
        </nav>
    </div>
{{--NAVBAR FIM--}}

@yield('content')



 <!-- Option 1: Bootstrap Bundle with Popper -->
 <script src="{{asset('js/bootstrap.bundle.min.js')}}" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>