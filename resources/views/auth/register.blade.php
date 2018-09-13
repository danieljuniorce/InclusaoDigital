@extends('layouts.app')

@section('content')
<div class="text-center border rounded"  id="formulario-login">
        <form class="" method="POST" action="{{ route('register') }}">
            {{ csrf_field() }}
            <div class="text-left">
                <h2 class="text-center"><i class="fas fa-user-circle"></i> REGISTRAR</h2>
                <hr>
                <div class="form-group text-left">
                    <label for="name">Seu Nome Completo: </label>
                    <input id="name" type="text" name="name" class="form-control" value="{{ old('name')}} " required autofocus>
                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong class="text-danger">{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group text-left">
                    <label for="email">Cadastre seu E-mail</label>
                    <input id="email" type="email" name="email" class="form-control" value="{{ old('email')}} " required autofocus>
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong class="text-danger">{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                        <label for="data" id="seila">Data de Nascimento</label>
                        <input id="data_de_nascimento" type="date" name="data_de_nascimento" class="text-center form-control" required autofocus/>
                        @if ($errors->has('data_de_nascimento'))
                        <span class="help-block">
                            <strong>{{ $errors->first('data_de_nascimento') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                        <label for="sexo" id="seila">Sexo</label>
                        <select class="form-control" id="sexo" name="sexo" required autofocus>
                                <option value="masculino">Masculino</option>
                                <option value="feminino">Feminino</option>
                        </select>
                        @if ($errors->has('sexo'))
                        <span class="help-block">
                            <strong>{{ $errors->first('sexo') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="password" id="seila">Cadastre sua Senha:</label>
                    <input id="password" type="password" name="password" class="form-control" required autofocus/>
                    @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="password-confirm" class="control-label">Confirme sua Senha: </label>

                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                </div>
                <div class="form-group text-right">
                    <button class="btn btn-primary px-3" type="submit">
                        Cadastrar
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
