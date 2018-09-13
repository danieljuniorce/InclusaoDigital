<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;
use App;
class UsuarioController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        return view('meuperfil');
    }

    public function minhaTurma(){
        return view('minhaturma');
    }

    public function minhaFrequencia(){
        return view('minhafrequencia');
    }
}
