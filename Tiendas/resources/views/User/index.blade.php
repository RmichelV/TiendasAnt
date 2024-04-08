@extends('template')
@section('content')

    <h1><center>Lista de usuarios</center> </h1>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#agregar">
    Agregar nuevo usuario
    </button>
    <br>
    <br>
    <div class="table-responsive">
        <table class="table table-primary">
            <thead class="table-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NOMBRES</th>
                    <th scope="col">APELLIDOS</th>
                    <th scope="col">FECHA DE NACIMIENTO</th>
                    <th scope="col">CORREO</th>
                    <th scope="col">CONTRASEÑA</th>
                    <th scope="col">TIPO DE USUARIO</th>
                    <th scope="col">ACCIONES</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr class="">
                        <td scope="row">{{$user->id}}</td> <!--aqui va el id-->
                        <td> {{$user->name}} </td>
                        <td> {{$user->last_name}} </td>
                        <td> {{$user->birthday}} </td>
                        <td> {{$user->email}} </td>
                        <td> {{$user->password}} </td>
                        <td> {{$user->rol->nombre}} </td>
                        <td>
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editar{{$user->id}}">
                                Editar
                            </button>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#eliminar{{$user->id}}">
                                Eliminar
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @include('user.agregar')
    @include('user.info')
@endsection
