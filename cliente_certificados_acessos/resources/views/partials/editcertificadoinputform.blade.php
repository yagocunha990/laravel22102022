
@foreach ($empresas as $empresa )
            @if ($empresa->id == $certificado->id_certificado_cliente)
                    <div class="my-3">
        <label class="form-label" for="">Razão Social</label>
        <input class="form-control" type="text"  value="{{$empresa->name}}" readonly >
        </div>
            @endif
        @endforeach

        <div class="my-3">

            <input class="form-control" type="hidden" name="id_certificado_cliente" value="{{$certificado->id_certificado_cliente}}" >
            </div>

            <div class="my-3">
                <label class="form-label" for="">Tipo Certificado</label>
            <select class="form-select" aria-label="Default select example" name="certificado_name" id="">



                @if ($certificado->certificado_name === 'E-CNPJ A1 1 ANO')
                <option value="E-CNPJ A1 1 ANO" selected >E-CNPJ A1 1 ANO</option>
                @else
                <option value="E-CNPJ A1 1 ANO" >E-CNPJ A1 1 ANO</option>
                @endif
                {{---------}}

                @if ($certificado->certificado_name === 'E-CPF A1 1 ANO')
                <option value="E-CPF A1 1 ANO" selected >E-CPF A1 1 ANO</option>
                @else
                <option value="E-CPF A1 1 ANO" >E-CPF A1 1 ANO</option>
                @endif
                {{------------------------}}
                @if ($certificado->certificado_name === 'E-CNPJ A3 CARTÃO 1 ANO')
                <option value="E-CNPJ A3 CARTÃO 1 ANO" selected >E-CNPJ A3 CARTÃO 1 ANO</option>
                @else
                <option value="E-CNPJ A3 CARTÃO 1 ANO" >E-CNPJ A3 CARTÃO 1 ANO</option>
                @endif
                {{------------------------}}
                @if ($certificado->certificado_name === 'E-CNPJ A3 CARTÃO 2 ANO')

                <option value="E-CNPJ A3 CARTÃO 2 ANO" selected >E-CNPJ A3 CARTÃO 2 ANO</option>
                @else
                <option value="E-CNPJ A3 CARTÃO 2 ANO" >E-CNPJ A3 CARTÃO 2 ANO</option>
                @endif
                {{------------------------}}
                @if ($certificado->certificado_name === 'E-CNPJ A3 CARTÃO 3 ANO')
                <option value="E-CNPJ A3 CARTÃO 3 ANO" selected >E-CNPJ A3 CARTÃO 3 ANO</option>
                @else
                <option value="E-CNPJ A3 CARTÃO 3 ANO" >E-CNPJ A3 CARTÃO 3 ANO</option>
                @endif
                {{------------------------}}
                @if ($certificado->certificado_name === 'E-CPF A3 CARTÃO 1 ANO')
                <option value="E-CPF A3 CARTÃO 1 ANO" selected >E-CPF A3 CARTÃO 1 ANO</option>
                @else
                <option value="E-CPF A3 CARTÃO 1 ANO" >E-CPF A3 CARTÃO 1 ANO</option>
                @endif
                {{------------------------}}
                @if ($certificado->certificado_name === 'E-CPF A3 CARTÃO 2 ANO')
                <option value="E-CPF A3 CARTÃO 2 ANO" selected >E-CPF A3 CARTÃO 2 ANO</option>
                @else
                <option value="E-CPF A3 CARTÃO 2 ANO" >E-CPF A3 CARTÃO 2 ANO</option>
                @endif
                {{------------------------}}
                @if ($certificado->certificado_name === 'E-CPF A3 CARTÃO 3 ANO')
                <option value="E-CPF A3 CARTÃO 3 ANO" selected >E-CPF A3 CARTÃO 3 ANO</option>

                @else
                <option value="E-CPF A3 CARTÃO 3 ANO" >E-CPF A3 CARTÃO 3 ANO</option>

                @endif
                {{-------------------------------}}
                @if ($certificado->certificado_name === 'E-CNPJ A3 TOKEN 1 ANO')
                <option value="E-CNPJ A3 TOKEN 1 ANO" selected >E-CNPJ A3 TOKEN 1 ANO</option>
                @else
                <option value="E-CNPJ A3 TOKEN 1 ANO"  >E-CNPJ A3 TOKEN 1 ANO</option>
                @endif
                {{------------------------}}
                @if ($certificado->certificado_name === 'E-CNPJ A3 TOKEN 2 ANO')
                <option value="E-CNPJ A3 TOKEN 2 ANO" selected >E-CNPJ A3 TOKEN 2 ANO</option>
                @else
                <option value="E-CNPJ A3 TOKEN 2 ANO" >E-CNPJ A3 TOKEN 2 ANO</option>
                @endif
                {{------------------------}}
                @if ($certificado->certificado_name === 'E-CNPJ A3 TOKEN 3 ANO')
                <option value="E-CNPJ A3 TOKEN 3 ANO" selected >E-CNPJ A3 TOKEN 3 ANO</option>
                @else
                <option value="E-CNPJ A3 TOKEN 3 ANO" >E-CNPJ A3 TOKEN 3 ANO</option>
                @endif
                {{------------------------}}
                @if ($certificado->certificado_name === 'E-CPF A3 TOKEN 1 ANO')
                <option value="E-CPF A3 TOKEN 1 ANO" selected >E-CPF A3 TOKEN 1 ANO</option>
                @else
                <option value="E-CPF A3 TOKEN 1 ANO" >E-CPF A3 TOKEN 1 ANO</option>
                @endif
                {{------------------------}}
                @if ($certificado->certificado_name === 'E-CPF A3 TOKEN 2 ANO')
                <option value="E-CPF A3 TOKEN 2 ANO" selected >E-CPF A3 TOKEN 2 ANO</option>
                @else
                <option value="E-CPF A3 TOKEN 2 ANO" >E-CPF A3 TOKEN 2 ANO</option>
                @endif

                {{-------------------------}}
                @if ($certificado->certificado_name === 'E-CPF A3 TOKEN 3 ANO')
                <option value="E-CPF A3 TOKEN 3 ANO" selected >E-CPF A3 TOKEN 3 ANO</option>
                @else
                <option value="E-CPF A3 TOKEN 3 ANO" >E-CPF A3 TOKEN 3 ANO</option>
                @endif






            </select>
            </div>

        <div class="my-3">
            <label class="form-label" for="">Validade do Certificado</label>
            <input class="form-control" type="date" name="validade_certificado" value="{{$certificado->validade_certificado}}" >
            </div>



        <div class="my-3">
        <input class="btn btn-primary" type="submit" value="Editar">
        </div>
