<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action="{{addslashes(strip_tags(trim(route('produtos.index'))))}}" method="get">
        <input type="text" name="nome" placeholder="Pesquisar...">
        <button>Pesquisar</button>
    </form>


        <table>

            <tr>
                <th>Nome</th>
                <th>Marca</th>
                <th>Quantidade</th>
            </tr>
            @foreach ($produtos as $produto )
            <?php $conta++ ?>
            <tr>
                <td>{{$produto->nome}}</td>
                <td>{{$produto->marca}}</td>
                <td>{{$produto->qtd}}</td>
            </tr>


            @endforeach

            @if ($conta == 0)
            <h1>A pesquisa não retornou resultados, Tente buscar novamente.</h1>
            @endif


        </table>




</body>
</html>
