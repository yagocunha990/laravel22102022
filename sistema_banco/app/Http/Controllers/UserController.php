<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Balance;
use App\Http\Requests\UserStore;
use App\Http\Requests\UserUpdate;
use App\Http\Requests\BankDepSac;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $users = User::all();
        return view('users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){

        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserStore $request) {


        //gerar numero aleatorio da conta
         $account =  random_int(100000, 999999);
        //pega os dados informado do cpf
         $cpf = $request->cpf ;

     // Verifica se foi informada uma sequência de digitos repetidos. Ex: 111.111.111-11
    if (preg_match('/(\d)\1{10}/', $cpf)) {
        return 'Sequencia de numeros repeditos';
    }
    // Faz o calculo para validar o CPF
    for ($t = 9; $t < 11; $t++) {
        for ($d = 0, $c = 0; $c < $t; $c++) {
            $d += $cpf[$c] * (($t + 1) - $c);
        }
        $d = ((10 * $d) % 11) % 10;
        if ($cpf[$c] != $d) {
            return 'cpf não é valido';
        }
    }



        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->password = $request->password;
        $user->account = $account;
        $user->cpf = $cpf;
        $user->save();


        return redirect()->route('users.create');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
     $user = User::find($id);

     return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdate $request, $id){

        //pega os dados informado do cpf
         $cpf = $request->cpf ;

     // Verifica se foi informada uma sequência de digitos repetidos. Ex: 111.111.111-11
    if (preg_match('/(\d)\1{10}/', $cpf)) {
        return 'Sequencia de numros repetidos';
    }
    // Faz o calculo para validar o CPF
    for ($t = 9; $t < 11; $t++) {
        for ($d = 0, $c = 0; $c < $t; $c++) {
            $d += $cpf[$c] * (($t + 1) - $c);
        }
        $d = ((10 * $d) % 11) % 10;
        if ($cpf[$c] != $d) {
            return 'Cpf não é valido';
        }
    }


    $user = User::find($id);
    $user->name = $request->name;
    $user->email = $request->email;
    $user->address = $request->address;
    $user->cpf = $cpf;
    $user-> account = $request-> account;
    $user-> password = $request-> password;
    $user->update();
    return redirect()->route('users.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
        $user = User::find($id);
        $user->delete();
        return redirect()->route('users.index');
    }


   public function bank_index(){
    $users_bank = User::get();

    return view('bank.index',compact('users_bank'));
   }

   public function cash_machine($id){
    $user = User::find($id);
    return view('bank.cash_machine', compact('user'));
   }

   public function dep($id){
    $user_id = $id;
    return view('bank.dep_page', compact('user_id'));
   }

   public function dep_fn(BankDepSac $request){
    //request
    //user_id
     //value
    $extract = "Valor depositado de: $request->value";
     //model embaixo
   // 'value',
   //'extract',
   //'user_id',


    $balance = new Balance;
    $balance->value = $request->value;
    $balance->user_id = $request->user_id;
    $balance->extract = $extract;
    $balance->save();



    return redirect()->route('bank.index');



     }

    public function ext($id){
        $balance_ext = DB::table('balances')->where('user_id', $id)->get();
        return view('bank.ext', compact('balance_ext'));
            }

    public function sac($id){
        $user_id = $id;
        return view('bank.sac_page', compact('user_id'));

    }

    public function sac_fn(BankDepSac $request){

    $extract = "Valor Sacado : $request->value";



   $balance = new Balance;
   $balance->value = $request->value;
   $balance->user_id = $request->user_id;
   $balance->extract = $extract;
   $balance->save();



   return redirect()->route('bank.index');
    }

}
