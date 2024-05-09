<!-- Modal editar -->
@foreach ($generos as $genero)
    

<div class="modal fade" id="editar{{$genero->id_genero}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Editar el genero</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('generos.update',$genero->id_genero)}}" method="post">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="" class="form-label">Editar Genero</label>
                        <input
                            type="text"
                            class="form-control"
                            name="nombre"
                            id=""
                            aria-describedby="helpId"
                            placeholder="Agregue el genero aqui"
                            value="{{$genero->nombre}}"
                            {{-- required --}}
                        />
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Actualizar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal ELIMINAR-->
<div class="modal fade" id="eliminar{{$genero->id_genero}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar genero</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('generos.destroy',$genero->id_genero)}}" method="post">
                @csrf
                @method('DELETE')
                <div class="modal-body">
                    Estas seguro de eliminar el género  <strong>{{$genero->nombre}}</strong>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Eliminar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endforeach