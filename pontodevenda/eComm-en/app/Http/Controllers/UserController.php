<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Session;

class UserController extends Controller{


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
