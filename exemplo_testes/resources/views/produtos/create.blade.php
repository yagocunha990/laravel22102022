<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action="{{route('produtos.store')}}" method="POST" enctype="multipart/form-data" >
        @csrf

        <input type="text" name="nome" placeholder="nome">
        <input type="text" name="marca" placeholder="Marca">
        <input type="text" name="qtd" placeholder="quantidade">
        <input type="date" name="vencimento" placeholder="Vencimento">

        <button type="submit">Cadastrar</button>
    </form>
    
</body>
</html>