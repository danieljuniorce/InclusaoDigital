@extends('layouts.app')

@section('content')
<div class="container mt-5 mb-5 bg-light" id="meuperfil">
    <h3 class="text-center py-3"><i class=" fas fa-user"> </i> MEU PERFIL</h3>
    <hr>
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12 text-center" style="height: 600px;">
            <div class="bg-secondary rounded" style="height: 200px;">
                <img src="http://via.placeholder.com/320x320" class="img-thumbnail foto-perfil" style="">
                <p class="text-center text-light foto-perfil" style="width: 100%; top: 40px;">{{ Auth::user()->name }}</p>
            </div>
            <div class="row mt-3">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="card rounded text-left">
                        <div style="padding-left: 20px; padding-right: 20px;">
                            <p class="text-center mt-1 negrito"><i class="fas fa-user-tie"></i> INFORMAÇÕES COMPLEMENTARES</p>
                            <p class="">Minha Turma: {{ Auth::user()->turma }}</p>
                            <p class="">Minha Idade: {{ Auth::user()->data_de_nascimento }}</p>
                            <p class="">Meu Sexo: {{ Auth::user()->sexo }}</p>
                            <p class="">Meu E-mail: {{ Auth::user()->email }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <div class="form-group">
                        <textarea class="form-control" id="" rows="4" placeholder="O que você esta pensando?"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection