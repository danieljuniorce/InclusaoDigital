@extends('layouts.app')

@section('content')
<div class="container bg-light border mb-5">
        <div class="row mt-3 ">
            <div class="col-sm-12 col-md-9 col-lg-9">
                <!-- Titulo da Página Home-->
                <h3 class="text-center"><i class="fas fa-laptop text-left"></i> Seja Bem-Vindo ao Portal Online <br> Inclusão Digital</h3>
                <hr>

                <!-- Carrousel-->
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img class="d-block w-100" src="https://blog.especializati.com.br/wp-content/uploads/2017/02/Como-recuperar-os-dados-do-usu%C3%A1rio-logado-no-laravel.gif" alt="First slide">
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" src="https://blog.especializati.com.br/wp-content/uploads/2017/02/Como-recuperar-os-dados-do-usu%C3%A1rio-logado-no-laravel.gif" alt="Second slide">
                          </div>
                          <div class="carousel-item">
                            <img class="d-block w-100" src="https://blog.especializati.com.br/wp-content/uploads/2017/02/Como-recuperar-os-dados-do-usu%C3%A1rio-logado-no-laravel.gif" alt="Third slide">
                          </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>
                <!-- Fim Carrousel -->
                <hr>
                
                <div id="avisos" class="border mb-4">
                    <h2 class="text-center mt-3 mr-3  " id="aviso-s">Avisos</h2>
                    <h5 class="text-center text-justify ml-2 mr-2">Segunda-Feira, dia 17/09 não haverá aula.</h5>
                    <h5 class="text-right mb-3 mr-3">POSTADO: 11/09/2018 as 11:20:30</h5>
                </div>
                <hr>
                <div id="avisos" class="border">
                    <h2 class="text-center mt-3 mr-3 " id="aviso-s">Avisos</h2>
                    <h5 class="text-center text-justify ml-2 mr-2">Segunda-Feira, dia 17/09 não haverá aula.</h5>
                    <h5 class="text-right mr-3">POSTADO: 11/09/2018 as 11:20:30</h5>
                </div>
                <hr>
            </div>
            <div class="col-sm-12 col-md-3 col-lg-3 navbar-fixed-bottom">
                <div class="well text-center">
                    <br>
                    PROPAGANDA
                </div>
            </div>
        </div>

<br><br><br>
</div>
@endsection
