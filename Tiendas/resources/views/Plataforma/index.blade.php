@extends('template')
@section('content')

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#agregar">
    Agregar nueva plataforma
    </button>

    <div class="table-responsive">
        <table class="table table-primary">
            <thead class="table-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">PLATAFORMA</th>
                    <th scope="col">ACCIONES</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($plataformas as $plataforma)
                    <tr class="">
                        <td scope="row">{{$plataforma->id_plataforma}}</td> <!--aqui va el id-->
                        <td> {{$plataforma->nombre}} </td>
                        <td>
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editar{{$plataforma->id_plataforma}}">
                                Editar
                            </button>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#eliminar{{$plataforma->id_plataforma}}">
                                Eliminar
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @include('plataforma.agregar')
    @include('plataforma.info')
@endsection
