@extends('template')
@section('content')

    <h1><center>Lista de tipos de usuarios</center> </h1>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#agregar">
    Agregar nuevo Rol
    </button>
    <br>
    <br>
    <div class="table-responsive">
        <table class="table table-primary">
            <thead class="table-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">ROL</th>
                    <th scope="col">ACCIONES</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($roles as $rol)
                    <tr class="">
                        <td scope="row">{{$rol->id_rol}}</td> <!--aqui va el id-->
                        <td> {{$rol->nombre}} </td>
                        <td>
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editar{{$rol->id_rol}}">
                                Editar
                            </button>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#eliminar{{$rol->id_rol}}">
                                Eliminar
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @include('rol.agregar')
    @include('rol.info')
@endsection
