@extends('layouts.app')

@section('content')
    @foreach($amigos as $amigo)
    <div class="container mt-5 mb-5 bg-light" id="meuperfil">
        <h3 class="text-center py-3"><i class=" fas fa-user"> </i> PERFIL</h3>
        <hr>
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 text-center" style="height: 600px;">
                <div class="bg-secondary rounded" style="height: 200px;">
                    <img src="http://via.placeholder.com/320x320" class="img-thumbnail foto-perfil" style="">
                    <p class="text-center text-light foto-perfil" style="width: 100%; top: 40px;">{{ $amigo->name }}</p>
                </div>
                <div class="row mt-3">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div class="card rounded text-left">
                            <div style="padding-left: 20px; padding-right: 20px;">
                                <p class="text-center mt-1 negrito"><i class="fas fa-user-tie"></i> INFORMAÇÕES COMPLEMENTARES</p>
                                <p class="">Turma: {{ $amigo->turma }}</p>
                                <p class="">Idade: {{ $amigo->data_de_nascimento }}</p>
                                <p class="">Sexo: {{ $amigo->sexo }}</p>
                                <p class="">Avaliação: {{ $amigo->avaliacao }}</p>
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
    @endforeach
@endsection