@extends('master')
@section('content')
<div class="  custom-product">



    <div class="col-sm-10">

        <table class="table">

            <tbody>
              <tr>

                <td>Montante</td>
                <td>{{$total  }}</td>

              </tr>
              <tr>

                <td>Tax</td>
                <td>$ 0</td>

              </tr>
              <tr>

                <td>Delivery</td>
                <td>$ 10</td>

              </tr>

              <tr>

                <td>Total do Montante</td>
                <td>$ {{$total + 10  }}</td>

              </tr>
            </tbody>
          </table>

          <div>
            <form>
                <div class="form-group">

                  <textarea type="email" class="form-control"  aria-describedby="emailHelp" placeholder="Digite seu Endereço"></textarea>

                </div>

                <div class="form-group">
                  <label for="pwd">Forma de Pagamento</label> <br> <br>
                  <input type="radio"  name="payment"> <span>Pagamento Online</span><br> <br>
                  <input type="radio"  name="payment"> <span>Pagamento EMI</span><br> <br>
                  <input type="radio"  name="payment"> <span>Pagamento por Delivery</span><br> <br>
                </div>


                <button type="submit" class="">Comprar Agora</button>
              </form>
          </div>




    </div>

</div>

@endsection

