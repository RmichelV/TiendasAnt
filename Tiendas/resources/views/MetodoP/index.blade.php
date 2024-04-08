@extends('template')
@section('content')

    <h1><center>Lista de Métodos de Pago</center></h1>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#agregar">
    Agregar nuevo Metodo de Pago
    </button>
    <br>
    <div class="table-responsive">
        <table class="table table-primary">
            <thead class="table-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Metodo de pago</th>
                    <th scope="col">ACCIONES</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($metodos as $metodo)
                    <tr class="">
                        <td scope="row">{{$metodo->id_metodop}}</td> <!--aqui va el id-->
                        <td> {{$metodo->nombre}} </td>
                        <td>
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editar{{$metodo->id_metodop}}">
                                Editar
                            </button>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#eliminar{{$metodo->id_metodop}}">
                                Eliminar
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @include('metodop.agregar')
    @include('metodop.info')
@endsection
