<!-- Modal -->
<div class="modal fade" id="agregar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Nueva tienda</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('tiendas.store')}}" method="post" onsubmit="return validarFormulario()">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="" class="form-label">Nombre de la tienda</label>
                        <input
                            type="text"
                            class="form-control"
                            name="nombre"
                            id="nombre"
                            aria-describedby="helpId"
                            placeholder="Agregue el nombre de la tienda aqui"
                            required
                        />
                        <small id="helpId" class="form-text text-muted">Por favor no utilice @ / - _ . , " " ' ' u otros similares </small>
                        <div id="nombre-error" class="alert alert-danger" style="display: none;">
                            Por favor ingrese un nombre valido
                        </div>
                        <label for="" class="form-label">Direccion de la tienda</label>
                        <input
                            type="text"
                            class="form-control"
                            name="direccion"
                            id="direccion"
                            aria-describedby="helpId"
                            placeholder="Agregue la direccion de la tienda aqui"
                            required
                        />
                        <small id="helpId" class="form-text text-muted">de ser puesto incluya el numero con # </small>
                        <label for="" class="form-label">Pertenece a: </label>
                        <select name="user" id="" class="form-control">
                            @foreach ($users as $user)
                                <option value="{{$user->id}}">{{$user->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Agregar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function validarFormulario() {
        var nombre = document.getElementById('nombre').value;
        var expresion = /^[a-zA-Z0-9]+$/;
        if (nombre.trim() === '' || !expresion.test(nombre)) {
            document.getElementById('nombre-error').style.display = 'block';
            return false;
        }
        return true;
    }
</script>