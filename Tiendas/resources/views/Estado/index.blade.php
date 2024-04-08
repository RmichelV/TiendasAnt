@extends('template')
@section('content')
    <h1>ESTADOS DE VENTA</h1>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#agregar">
    Agregar nuevo Estado
    </button>

    <div class="table-responsive">
        <table class="table table-primary">
            <thead class="table-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Estados</th>
                    <th scope="col">ACCIONES</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($estados as $estado)
                    <tr class="">
                        <td scope="row">{{$estado->id_estado}}</td> <!--aqui va el id-->
                        <td> {{$estado->nombre}} </td>
                        <td>
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editar{{$estado->id_estado}}">
                                Editar
                            </button>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#eliminar{{$estado->id_estado}}">
                                Eliminar
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @include('estado.agregar')
    @include('estado.info')
@endsection
