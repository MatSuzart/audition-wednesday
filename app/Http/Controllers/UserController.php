<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index (Request $request){
        $user = User::all();

    }

    public function edit (Request $request, $id){
        
        $user = User::findOrFail($id);
        $user ->nome = $request->nome;
        $user->save();
    }

    public function delet (Request $request, $id){
        $user = user::findOrFail($id);
        $user->delete();
    }
}
