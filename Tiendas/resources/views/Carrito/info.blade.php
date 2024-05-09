<!-- Modal ELIMINAR -->
@foreach ($juegos_en_carrito as $juego)
<div class="modal fade" id="eliminar{{$juego->id_juego}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar Juego</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('carritos.destroy', $juego->id_juego) }}" method="post">
                @csrf
                @method('DELETE')
                <div class="modal-body">
                    ¿Estás seguro de que quieres eliminar el juego {{ $juego->nombre }} del carrito?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </div>
            </form>
            
        </div>
    </div>
</div>
@endforeach
