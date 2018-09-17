<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;
use App;
use App\User;
class UsuarioController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        return view('meuperfil');
    }

    public function minhaTurma(Request $request, $escolheTurma){
        $turma = User::where('turma', $escolheTurma)->get();
        $numero = 0;
        return view('minhaturma', compact('turma', 'numero'));
    }

    public function minhaFrequencia(){
        return view('minhafrequencia');
    }
    
    public function perfil(Request $request, $matricula){
        $amigos = App\User::where('matricula', $matricula)->get();
        return view('perfil', compact('amigos'));
    }
}
