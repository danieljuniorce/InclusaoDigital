@extends('layouts.app')

@section('content')
    <div class="container bg-light" id="minhaturma">
        <h3 class="text-center py-3"><i class="fas fa-book"></i> MINHA TURMA</h3>
        <table class="table">
            <thead>
                <tr class="table-primary">
                    <th scope="col">#</th>
                    <th scope="col"><i class="fas fa-award"></i> Participantes</th>
                    <th scope="col"><i class="fas fa-users"></i> Perfil</th>
                    <th scope="col" class="text-center"><i class="fas fa-star"></i> Avaliação</th>
                </tr>
            </thead>
            <tbody>
                    <tr class="">
                        <th scope="row">1</th>
                        <th>Daniel Junior de Souza Lima</th>
                        <th><a href="#" class="btn btn-primary" >Olhar</a></th>
                        <th class="text-danger text-center">REGULAR</th>
                    </tr>

                <tr class="">
                    <th scope="row">2</th>
                    <th>Vandiscleia Lurdes Alvenaria</th>
                    <th><a href="#" class="btn btn-primary" >Olhar</a></th>
                    <th class="text-success text-center">EXCELENTE</th>
                </tr>
                <hr>
            </tbody>
        </table>
    </div>
@endsection