@extends('layouts.app')
@section('content')
    {{ csrf_field() }}
    <div class="container bg-light">
        <div class="py-3">
            <h3 class="text-center negrito"><i class="fas fa-address-book"> </i> ÁREA ADMINISTRATIVA</h3>
            <hr/>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <table class="table">
                        <thead>
                            <tr class="text-center">
                                <th scope="col"><i class="fas fa-angle-down"></i> # </th>
                                <th scope="col"><i class="fas fa-user-tie"></i> TURMAS </th>
                                <th scope="col"><i class="fas fa-chalkboard"></i> FREQUÊNCIA </th>
                                <th scope="col"><i class="fas fa-bell"></i> NOTAS </th>
                                <th scope="col"><i class="fas fa-info-circle"></i> INFORMAÇÕES </th>
                                <th scope="col"><i class="fas fa-at"></i> AVALIAÇÕES</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-center">
                                <th><i class="fas fa-angle-down"></i> 1 </th>
                                <th> TURMA 1 - 08:00 </th>
                                <th> <a href="{{ url('admin/frequencia') }}" class="btn btn-primary px-3 text-light"><i class="fas fa-check-circle"></i> Frequência </a> </th>
                                <th> <a class="btn btn-danger px-3 text-light"><i class="fas fa-check-circle"></i> NOTAS </a></th>
                                <th> <a class="btn btn-dark px-3 text-light"><i class="fas fa-check-circle"></i> INFORMAÇÕES </a> </th>
                                <th> <a class="btn btn-success px-3 text-light"><i class="fas fa-check-circle"></i> AVALIAÇÃO </a></th>
                            </tr>
                            <tr class="text-center">
                                <th><i class="fas fa-angle-down"></i> 2 </th>
                                <th> TURMA 2 - 09:30 </th>
                                <th> <a class="btn btn-primary px-3 text-light"><i class="fas fa-check-circle"></i> Frequência </a> </th>
                                <th> <a class="btn btn-danger px-3 text-light"><i class="fas fa-check-circle"></i> NOTAS </a></th>
                                <th> <a class="btn btn-dark px-3 text-light"><i class="fas fa-check-circle"></i> INFORMAÇÕES </a> </th>
                                <th> <a class="btn btn-success px-3 text-light"><i class="fas fa-check-circle"></i> AVALIAÇÃO </a></th>
                            </tr>
                            <tr class="text-center">
                                <th><i class="fas fa-angle-down"></i> 3 </th>
                                <th> TURMA 3 - 13:00 </th>
                                <th> <a class="btn btn-primary px-3 text-light"><i class="fas fa-check-circle"></i> Frequência </a> </th>
                                <th> <a class="btn btn-danger px-3 text-light"><i class="fas fa-check-circle"></i> NOTAS </a></th>
                                <th> <a class="btn btn-dark px-3 text-light"><i class="fas fa-check-circle"></i> INFORMAÇÕES </a> </th>
                                <th> <a class="btn btn-success px-3 text-light"><i class="fas fa-check-circle"></i> AVALIAÇÃO </a></th>
                            </tr>
                            <tr class="text-center">
                                <th><i class="fas fa-angle-down"></i> 4 </th>
                                <th> TURMA 4 - 14:30 </th>
                                <th> <a class="btn btn-primary px-3 text-light"><i class="fas fa-check-circle"></i> Frequência </a> </th>
                                <th> <a class="btn btn-danger px-3 text-light"><i class="fas fa-check-circle"></i> NOTAS </a></th>
                                <th> <a class="btn btn-dark px-3 text-light"><i class="fas fa-check-circle"></i> INFORMAÇÕES </a> </th>
                                <th> <a class="btn btn-success px-3 text-light"><i class="fas fa-check-circle"></i> AVALIAÇÃO </a></th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection