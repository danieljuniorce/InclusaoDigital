<?php

namespace App\Http\Controllers;
use Gate;

use Illuminate\Http\Request;
use App\Policies\AdminPolicy;

class AdministracaoController extends Controller
{

    public function __construct(){
        $this->middleware('auth');


    }

    public function index(){
        $this->authorize('admin-frequencia');
        return view('admin.administracao');

    }
}
