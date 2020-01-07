<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
   public function register(Request $request){
    $user = new User([
        'name'=>$request->name,
        'data'=>$request->data,
        'cpf'=>$request->cpf,
        'login'=>$request->login,
        'email'=>$request->email,
        'password'=>bcrypt($request->password)
    ]);

    $user->save();

    return 'successful registration';
   }

   public function login(Request $request){
    $cred = [
        'email'=>$request->email,
        'password'=>$request->password
    ];

    if(!Auth::attempt($cred)){
        return 'error';
    }    
    $user = $request->User();
    $token = $user->createToken('Acess')->acessToken();

    return response()->json([
        'token'=> $token
    ]);

   }
}
