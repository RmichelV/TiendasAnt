<!-- Modal -->
<div class="modal fade" id="agregar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Nuevo Usuario</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('users.store')}}" method="post" onsubmit="return validarFormulario()">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="" class="form-label">Nombre(s)</label>
                        <input
                            type="text"
                            class="form-control"
                            name="nombres"
                            id="nombres"
                            aria-describedby="helpId"
                            placeholder="Agregue su(s) nombre(s) aqui"
                            required
                        />
                        <small id="helpId" class="form-text text-muted">Por favor no utilice @ / - _ . , " " ' ' u otros similares </small>
                        <div id="nombre-error" class="alert alert-danger" style="display: none;">
                            Por favor ingrese un nombre valido
                        </div>
                        <label for="" class="form-label">Apellido(s)</label>
                        <input
                            type="text"
                            class="form-control"
                            name="apellidos"
                            id="apellidos"
                            aria-describedby="helpId"
                            placeholder="Agregue su(s) apellido(s) aqui"
                        />
                        <small id="helpId" class="form-text text-muted">Por favor no utilice @ / - _ . , " " ' ' u otros similares </small>
                        <div id="apellido-error" class="alert alert-danger" style="display: none;">
                            Por favor ingrese un nombre valido
                        </div>
                        <label for="" class="form-label">Fecha de Nacimiento</label>
                        <input
                            type="date"
                            class="form-control"
                            name="fechan"
                            id=""
                            aria-describedby="helpId"
                            required
                        />
                        <label for="" class="form-label">Correo</label>
                        <input
                            type="email"
                            class="form-control"
                            name="correo"
                            id=""
                            aria-describedby="helpId"
                            placeholder="Agregue el correo electronico aqui"
                            required
                        />
                        <label for="" class="form-label">Contraseña</label>
                        <input
                            type="text"
                            class="form-control"
                            name="pssword"
                            id=""
                            aria-describedby="helpId"
                            placeholder="Agregue aqui la contraseña"
                            required
                        />
                        <label for="" class="form-label">Tipo de usuario</label>
                        <select name="rol" id="" class="form-control">
                            @foreach ($roles as $rol)
                                <option value="{{$rol->id_rol}}">{{$rol->nombre}}</option>
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
        var nombre = document.getElementById('nombres').value;
        var apellido = document.getElementById('apellidos').value;
        var expresion = /^[a-zA-Z0-9]+$/;
        if (nombre.trim() === '' || !expresion.test(nombre)) {
            document.getElementById('nombre-error').style.display = 'block';
            return false;
        }
        if (apellido.trim() === '' || !expresion.test(apellido)) {
            document.getElementById('apellido-error').style.display = 'block';
            return false;
        }
        return true;
    }
</script>