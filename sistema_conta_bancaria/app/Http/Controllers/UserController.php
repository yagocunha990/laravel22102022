<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Session;

class UserController extends Controller{

function index (){

    return view('index');
}

function create(){
    return view('create');
}

////////////////////////////
public function store(Request $request){

    $request->validate([
        'name' => 'required|max:255',
        'cpf' => 'required|numeric|min:11|max:11',
        'address' => 'required|max:255',
        'email' => 'required|email|max:255',
        'password' => 'required|min:6|max:6',

    ]);

    //gerar numero aleatorio da conta
     $account =  random_int(100000, 999999);
    //validar o cpf


    $cpf = $request->cpf ;


     // Verifica se foi informada uma sequência de digitos repetidos. Ex: 111.111.111-11
    if (preg_match('/(\d)\1{10}/', $cpf)) {
        return 'Verifica se foi informada uma sequência de digitos repetidos. Ex: 111.111.111-11';
    }
    // Faz o calculo para validar o CPF
    for ($t = 9; $t < 11; $t++) {
        for ($d = 0, $c = 0; $c < $t; $c++) {
            $d += $cpf[$c] * (($t + 1) - $c);
        }
        $d = ((10 * $d) % 11) % 10;
        if ($cpf[$c] != $d) {
            return 'Verifica se foi informada uma sequência de digitos repetidos. Ex: 111.111.111-11';
        }
    }

    return $cpf;

    //$cpf =
    //Produto::create([
      //  'name' => $request->name,
        //'email' => $request->email,
        //'address' => $request->address,
        //'password' => $request->password,
        //'account' => $account,
    //]);
    //echo "Produto criado com sucesso";
}

    function login(Request $request){
        $user =  User::where(['email' => $request->email])->first();

        if (!$user || !Hash::check($request->password,$user->password)) {
                return "Nome ou Senha não coencide";
        } else {
            $request->session()->put('user',$user);
            return redirect('/');
        }


    }

    ///////////////////////
    function logout(){
        Session::forget('user');
        return redirect('login');
    }
}
