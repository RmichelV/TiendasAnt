{{-- @extends('template')
@section('content')
@foreach ($generos as $genero)
<a href="#">{{$genero->nombre}}</a>
@endforeach

<p> </p>
@endsection --}}


{{-- 

@extends('template')
@section('content')
@foreach ($generos as $genero)
<a href="#" class="genero-link" data-id="{{$genero->id_genero}}">{{$genero->nombre}}</a>
@endforeach

<table id="juegos-generos-table" style="display:none;">
    <thead>
        <tr>
            <th>ID Juego</th>
            <th>ID Género</th>
        </tr>
    </thead>
    <tbody>
    </tbody>
</table>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const generoLinks = document.querySelectorAll('.genero-link');
    const juegosGenerosTable = document.getElementById('juegos-generos-table');

    generoLinks.forEach(link => {
        link.addEventListener('click', function(event) {
            event.preventDefault();
            const generoId = this.getAttribute('data-id');
            console.log('ID del género:', generoId); // Mensaje de depuración
            // Ocultar la tabla si ya estaba mostrándose
            juegosGenerosTable.style.display = 'none';
            
            // Limpiar el contenido de la tabla
            juegosGenerosTable.querySelector('tbody').innerHTML = '';

            // Obtener los registros de juegos_generos correspondientes al género seleccionado
            fetch(`/genjuegos/${generoId}/juegos-generos`)
                .then(response => response.json())
                .then(data => {
                    // Llenar la tabla con los datos obtenidos
                    data.forEach(row => {
                        const newRow = document.createElement('tr');
                        newRow.innerHTML = `<td>${row.id_juego}</td><td>${row.id_genero}</td>`;
                        juegosGenerosTable.querySelector('tbody').appendChild(newRow);
                    });
                    
                    // Mostrar la tabla
                    juegosGenerosTable.style.display = 'block';
                })
                .catch(error => console.error('Error:', error));
        });
    });
});
</script>
@endsection --}}

@extends('template')
@section('content')
@foreach ($generos as $genero)
<a href="#" class="genero-link" data-id="{{$genero->id_genero}}">{{$genero->nombre}}</a>
@endforeach

<table id="juegos-generos-table" style="display:none;">
    <thead>
        <tr>
            <th>ID Juego</th>
            <th>ID Género</th>
        </tr>
    </thead>
    <tbody>
    </tbody>
</table>

<table id="id-juegos-table" style="display:none;">
    <thead>
        <tr>
            <th>ID Juego</th>
        </tr>
    </thead>
    <tbody>
    </tbody>
</table>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const generoLinks = document.querySelectorAll('.genero-link');
    const juegosGenerosTable = document.getElementById('juegos-generos-table');
    const idJuegosTable = document.getElementById('id-juegos-table');

    generoLinks.forEach(link => {
        link.addEventListener('click', function(event) {
            event.preventDefault();
            const generoId = this.getAttribute('data-id');
            console.log('ID del género:', generoId); // Mensaje de depuración
            // Ocultar las tablas si ya estaban mostrándose
            juegosGenerosTable.style.display = 'none';
            idJuegosTable.style.display = 'none';
            
            // Limpiar el contenido de las tablas
            juegosGenerosTable.querySelector('tbody').innerHTML = '';
            idJuegosTable.querySelector('tbody').innerHTML = '';

            // Obtener los registros de juegos_generos correspondientes al género seleccionado
            fetch(`/genjuegos/${generoId}/juegos-generos`)
                .then(response => response.json())
                .then(data => {
                    // Llenar la tabla de juegos_generos con los datos obtenidos
                    data.forEach(row => {
                        const newRow = document.createElement('tr');
                        newRow.innerHTML = `<td>${row.id_juego}</td><td>${row.id_genero}</td>`;
                        juegosGenerosTable.querySelector('tbody').appendChild(newRow);

                        // Llenar la tabla de ID de juegos con los ID de juegos obtenidos
                        const newIdJuegoRow = document.createElement('tr');
                        newIdJuegoRow.innerHTML = `<td>${row.id_juego}</td>`;
                        idJuegosTable.querySelector('tbody').appendChild(newIdJuegoRow);
                    });
                    
                    // Mostrar las tablas
                    juegosGenerosTable.style.display = 'block';
                    idJuegosTable.style.display = 'block';
                })
                .catch(error => console.error('Error:', error));
        });
    });
});
</script>
@endsection
