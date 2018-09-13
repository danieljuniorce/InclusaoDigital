@extends('layouts.app')

@section('content')
<div class="container mt-5">
        <div class="card">
            <div class="row">
                <div class="col-sm-2 col-md-2 col-lg-2">
                    <img class="img-thumbnail mt-3 mb-3 ml-3 mr-3" src="http://via.placeholder.com/150x150">
                </div>
                <div class="col-sm col-md col-lg text-left">
                <h5 class="mt-5 ml-5 mr-5 negrito"> {{ Auth::user()->name }}</h5>
                    <p class="ml-5 mr-5" type="date">E-mail: {{ Auth::user()->email }}</p>
                    <p class="ml-5">Avaliação: Excelente </p>
                    <hr>
                </div>
                <div class="col-sm-0 col-md col-lg">
                    <p class="text-right mr-3 mt-3">Ultima Atualização 22/05/2018 as 22:55:22 <br><br>
                    </p>
                </div>
            </div>
            <div class="row mb-5 mr-5 ml-5">
                <div class="col-sm-2 col-md-2 col-lg-2 text-center mt-5 negrito">
                    <p> M<br>I<br>N<br>H<br>A<br>S<br><br>I<br>N<br>F<br>O<br>R<br>M<br>A<br>Ç<br>Õ<br>E<br>S</p>
                </div>
                <div class="col-sm col-md col-lg">
                    <h5 class="ml-5 negrito">Sobre me</h5>
                    <div class="card">
                        <p class="text-justify mr-3 ml-3 mt-3 mb-3">&nbsp&nbsp&nbsp&nbspIntrodução Com o avanço da tecnologia
                            nas últimas décadas, principalmente dos computadores, discuti-se cada vez mais a utilização. </p>
                    </div>
                    <h5 class="ml-5 mt-3 negrito">Formação</h5>
                    <div class="card">
                        <p class="text-justify mr-3 ml-3 mt-3">&nbsp&nbsp&nbsp&nbsp Analise e Desenvolvimento de Sistema</p>
                    </div>
                    <h5 class="ml-5 mt-3 negrito">Mais Informações</h5>
                    <div class="card">
                        <p class="text-justify mr-3 ml-3 mt-3">Data de Nascimento: {{ Auth::user()->data_de_nascimento }}</p>
                        <p class="text-justify mr-3 ml-3 mt-1">Sexo: {{ Auth::user()->sexo }}</p>
                        <p class="text-justify mr-3 ml-3 mt-1">Minha Turma: {{ Auth::user()->turma }}</p>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection