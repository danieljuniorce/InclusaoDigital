@extends('layouts.app')

@section('content')
<div class="container bg-light" id="minhaturma">
        <h3 class="text-center py-3"><i class="fas fa-book"></i> MINHA FREQUÊNCIA</h3>
        <table class="table">
            <thead>
                <tr class="table-primary">
                    <th scope="col">#</th>
                    <th scope="col"><i class="fas fa-award"></i> MÊS</th>
                    <th scope="col" class="text-center"><i class="fas fa-users"></i> PORCETAGEM</th>
                    <th scope="col" class="text-center"><i class="fas fa-star"></i> AVISOS</th>
                </tr>
            </thead>
            <tbody>
                <tr class="">
                    <th scope="row">1</th>
                     <th>AGOSTO</th>
                    <th class="text-center"><a href="" class="btn btn-warning text-center" aria-disabled="true">25%</a></th>
                    <th class="text-danger text-center">CUIDADO</th>
                </tr>
                <tr class="">
                    <th scope="row">2</th>
                    <th>SETEMBRO</th>
                    <th class="text-center"><a href="" class="btn btn-warning" >25%</a></th>
                    <th class="text-success text-center">CUIDADO</th>
                </tr>
                <tr class="">
                    <th scope="row">3</th>
                    <th>OUTUBRO</th>
                    <th class="text-center"><a href="" class="btn btn-warning" >25%</a></th>
                    <th class="text-success text-center">CUIDADO</th>
                </tr>
                <tr class="">
                    <th scope="row">4</th>
                    <th>NOVEMBRO</th>
                    <th class="text-center"><a href="" class="btn btn-warning" >25%</a></th>
                    <th class="text-success text-center">CUIDADO</th>
                </tr>
                <hr>
            </tbody>
        </table>
    </div>
@endsection