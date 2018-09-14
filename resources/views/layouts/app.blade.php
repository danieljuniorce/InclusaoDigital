<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Inclusão Digital') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- Vue.js -->
    <script src="{{ asset('js/vue.js')}} }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js" integrity="sha384-kW+oWsYx3YpxvjtZjFXqazFpA7UP/MbiY4jvs+RWZo2+N94PFZ36T6TFkc9O3qoB" crossorigin="anonymous"></script>
</head>
<body>
    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3 class="text-center"><i class="fas fa-desktop"></i> INCLUSÃO <i id="nome-logo">&nbsp; &nbsp; &nbsp;</i> DIGITAL</h3>
            </div>
            <!-- Deslogado -->
            @if(Auth::guest())
            <ul class="list-unstyled components">
                <p class="text-center">Informática do Básico ao Avançado.</p>
                <li class="active">
                    <a href="{{ route('home') }}" class=""><i class="fas fa-newspaper"></i> PÁGINA INICIAL</a>
                </li>
                <li>
                    <a href="#"><i class="fas fa-align-justify"> </i> SOBRE </a>
                    <a href="#"><i class="fas fa-phone-volume"> </i> CONTATO</a>
                </li>
                <li>
                    <a href="{{ route('login') }}"><i class="fas fa-sign-in-alt"> </i> ENTRAR</a>
                </li>
                <li>
                    <a href="{{ route('register') }}"><i class="fas fa-registered"> </i> REGISTRAR</a>
                </li>
            </ul>
            <!-- Logado -->
            @else
            <ul class="list-unstyled components">
                <p class="text-center">SEJA BEM VINDO <br>A ÁREA DE ALUNO</p>
                <li>
                    <a href="{{ route('home') }}">PÁGINA INICIAL</a>
                </li>
                <li class="">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">ACADÊMICO</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="{{ route('meuperfil') }}">MEU PERFIL</a>
                        </li>
                        <li>
                        <a href="{{ route('minhaturma', Auth::user()->turma) }}">MINHA TURMA</a>
                        </li>
                        <li>
                            <a href="{{ route('frequencia') }}">CONSULTA FREQUÊNCIA</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">CONTATOS</a>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">REQUERIMENTOS</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#">NOVO</a>
                        </li>
                        <li>
                            <a href="#">CONSULTAR</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">AULAS</a>
                </li>
                <li>
                    <a href="#">AVISOS</a>
                </li>
                    <li>
                        <a href="#">ADMINISTRAÇÃO</a>
                    </li>
            </ul>
            @endif

            <ul class="list-unstyled CTAs">
                <li>
                    <a href="http://facebook.com/danieljunior214" class="bg-light download text-center text-dark">Desenvolvido por <br/> Daniel Junior</a>
                </li>
                <li>
                    <a href="http://www.lfc.org.br" class="article text-center">Copyright &copy;2018</a>
                </li>
            </ul>
        </nav>

        <!-- Page Content Holder -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="navbar-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse text-right mx-4" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto navbar-fixed-top">
                            <!-- Deslogado -->
                            @if(Auth::guest())
                                <li class="nav-item active">
                                    <a class="nav-link" href=" {{ route('login') }}"><i class="fas fa-sign-in-alt"> </i> Entrar</a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{ route('register') }}"><i class="fas fa-registered"> </i> Cadastrar</a>
                                </li>
                            <!-- Logado -->
                            @else
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{ route('meuperfil') }}"><i class="fas fa-address-card"></i> Meu Perfil</a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{ route('logout') }}"><i class="fas fa-times-circle"></i> Sair</a>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Corpo do Site  -->
            @yield('content')
            <!-- Fim do Corpo do Site -->
        </div>
    </div>
    

    <!-- Scripts -->
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    
    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
            });
        });
    </script>
</body>
</html>
