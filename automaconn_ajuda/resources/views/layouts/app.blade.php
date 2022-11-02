<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> @yield('title') Automaconn</title>
    <!-- CSS style -->
    <link rel="stylesheet" href="{{asset('css/style.css') }}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">


</head>

<body class="bg-light">
    {{--NAVBAR INICIO--}}
            <nav class=" navbar  navbar-light fixed-top bg-light shadow-sm">
                <div class="container-lg">
                <a class="navbar-brand text-primary fw-bold fs-4" href="#">AUTOMACONN AJUDA</a>
                    
                </div>
            </nav>
    {{--NAVBAR FIM--}}

@yield('content')

{{-- FOOTER --}}
        <footer class="footer border-top py-4">
            <div class="container-lg">
                <div class="row">
                    <div class="col-lg-12">
                        <p class="m-0 text-center text-muted">&copy; 2022 Yago Costa</p>
                    </div>
                </div>

            </div>
        </footer>
{{-- FOOTER --}}



 <!-- Option 1: Bootstrap Bundle with Popper -->
 <script src="{{asset('js/bootstrap.bundle.min.js')}}" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>