<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    


        <table>

            <tr>
                <th>Nome</th>
                <th>Marca</th>
                <th>Quantidade</th>
                <th>Vencimento</th>
            </tr>
            @foreach ($produtos as $produto )
            
            <tr>
                <td>{{$produto->nome}}</td>
                <td>{{$produto->marca}}</td>
                <td>{{$produto->qtd}}</td>
                <td>{{date('d/m/y',strtotime($produto->vencimento));}}</td>
                <td>
                <?php $dataatual = date('d/m/y');
                      //$dataatual = date('d/m/y', strtotime($dataatual));
                      $datavencimento = date('d/m/y', strtotime($produto->vencimento));
                      echo  $dataatual;
                      
                      echo $datavencimento;
                      if ($datavencimento <= $dataatual) {
                        echo"certificado perto de se vencer, ou vencido";
                      } else {
                        echo"certificado não estar vencido";
                      }
                      
                
                ?></td>
            </tr>


            @endforeach

          


        </table>




</body>
</html>
