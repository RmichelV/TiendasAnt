@extends('template')
@section('content')

    <div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">Juego</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($juegos_en_carrito as $juego)
                    <tr>
                        <td>{{ $juego->nombre }}</td>
                        <td>
                            <a href="{{url('pago')}}">
                                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editar{{$juego->id_juego}}">
                                    Comprar
                                </button>
                            </a>
                            
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#eliminar{{$juego->id_juego}}">
                                Eliminar
                            </button>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="2">No hay juegos en el carrito</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    
    @include('Carrito.info')
@endsection
