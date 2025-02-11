<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccesoController extends Controller
{
    //
    public function mostrarLogin(){
        return view('login');
    }
    public function login(Request $request){
       if(Auth::attempt($request->only('email','password'))){
            redirect()->route('home');
       }
       redirect()->back()->with('error','Usuario o contraseña incorrectos');

    }
}
