@extends('template')
@section('content')

    <h1> <center>Lista de Géneros</center></h1>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#agregar">
    Agregar nueva Género
    </button>
    <br>
    <div class="table-responsive">
        <table class="table table-primary">
            <thead class="table-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Géneros</th>
                    <th scope="col">ACCIONES</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($generos as $genero)
                    <tr class="">
                        <td scope="row">{{$genero->id_genero}}</td> <!--aqui va el id-->
                        <td> {{$genero->nombre}} </td>
                        <td>
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editar{{$genero->id_genero}}">
                                Editar
                            </button>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#eliminar{{$genero->id_genero}}">
                                Eliminar
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @include('genero.agregar')
    @include('genero.info')
@endsection
