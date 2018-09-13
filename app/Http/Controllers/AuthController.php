<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function logadoSucesso(){
        if(Auth::guest()){
            return redirect('/home');
        }else{
            return redirect('/login');
        }
    }
}
