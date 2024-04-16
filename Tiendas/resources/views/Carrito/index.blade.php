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
                        <td><!-- Aquí puedes agregar acciones relacionadas con los juegos --></td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="2">No hay juegos en el carrito</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    
@endsection
