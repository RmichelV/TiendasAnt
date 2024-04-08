<!-- Modal editar -->
<div class="modal fade" id="editar{{$rol->id_rol}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Nuevo Rol</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('roles.update',$rol->id_rol)}}" method="post">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="" class="form-label">Editar Rol</label>
                        <input
                            type="text"
                            class="form-control"
                            name="nombre"
                            id=""
                            aria-describedby="helpId"
                            placeholder="Agregue el rol aqui"
                            value="{{$rol->nombre}}"
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
<div class="modal fade" id="eliminar{{$rol->id_rol}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar Rol</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('roles.destroy',$rol->id_rol)}}" method="post">
                @csrf
                @method('DELETE')
                <div class="modal-body">
                    Estas seguro de eliminar al rol  <strong>{{$rol->nombre}}</strong>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Eliminar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>