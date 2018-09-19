<?php

namespace App\Http\Controllers;
use Gate;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Policies\AdminPolicy;
use App\Dias;
use App\Mes;
use App\User;
class AdministracaoController extends Controller
{

    public function __construct(){
        $this->middleware('auth');


    }

    public function index(){
        $this->authorize('admin-frequencia');
        return view('admin.administracao');

    }
    public function frequencia(Request $request){
        $this->authorize('admin-frequencia');
        $dias = Dias::all();
        $mes = Mes::all();
        $alunos = User::all();
        return view('admin.frequencia', compact('dias', 'mes', 'alunos'));
    }

    public function envioFrequencia(Request $request){

        return view('admin.frequenciaa');
    }
}
