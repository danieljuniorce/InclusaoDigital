@extends('layouts.app')

@section('content')
    <div class="text-center border rounded"  id="formulario-login">
        <form class="" method="POST" action="{{ route('login') }}">
            {{ csrf_field() }}
            <div class="text-left">
                <h2 class="text-center"><i class="fas fa-user-circle"></i> ENTRAR</h2>
                <hr>
                <div class="form-group text-left">
                    <label for="email">Digite seu E-mail</label>
                    <input id="email" type="email" name="email" class="form-control" value="{{ old('email')}} " required autofocus>
                    @if ($errors->has('email'))
                    <span class="help-block">
                        <strong class="text-danger">{{ $errors->first('email') }}</strong>
                    </span>
                @endif
                </div>
                <div class="form-group">
                    <label for="password" id="seila">Digite sua Senha</label>
                    <input id="password" type="password" name="password" class="form-control" required autofocus/>
                    @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
                </div>
                <div class="form-group text-right">
                    <button class="btn btn-default" type="submit">
                        Entrar
                    </button>
                </div>
            </div>
        </form>
    </div>
    @if(Auth::guest())

    @else
    <h5 class="text-center">VOCÊ ESTÁ LOGADO</h5>
    <div class="text-center">
        <a class="btn btn-primary" href="{{ route('home') }}">
            CLICKE AQUI
        </a>
    </div>
    @endif
@endsection
