@extends('layouts.app')
{{ csrf_field() }}
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
            @if($turma)
                @foreach($turma as $users)
                    <tr class="">
                        <th scope="row">{{ $numero = $numero + 1 }}</th>
                        <th>{{$users->name}}</th>
                        <th><a href="{{ route('perfil', $users->matricula)}}" class="btn btn-primary" >Olhar</a></th>
                        @if($users->avaliacao == 'RUIM')
                            <th class="text-danger text-center">{{ $users->avaliacao }}</th>
                        @elseif($users->avaliacao == 'REGULAR')
                            <th class="text-warning text-center">{{ $users->avaliacao }}</th>
                        @elseif($users->avaliacao == 'BOM')
                            <th class="text-primary text-center">{{ $users->avaliacao }}</th>
                        @elseif($users->avaliacao == 'ÓTIMO')
                            <th class="text-success text-center">{{ $users->avaliacao }}</th>
                        @elseif($users->avaliacao == 'O MELHOR')
                            <th class="text-secondary text-center">{{ $users->avaliacao }}</th>
                        @endif
                    </tr>
                @endforeach
            @endif
            </tbody>
        </table>
    </div>
@endsection