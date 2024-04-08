<!-- Modal -->
<div class="modal fade" id="agregar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Nuevo Usuario</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('users.store')}}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="" class="form-label">Nombre(s)</label>
                        <input
                            type="text"
                            class="form-control"
                            name="nombres"
                            id=""
                            aria-describedby="helpId"
                            placeholder="Agregue su(s) nombre(s) aqui"
                        />
                        <label for="" class="form-label">Apellido(s)</label>
                        <input
                            type="text"
                            class="form-control"
                            name="apellidos"
                            id=""
                            aria-describedby="helpId"
                            placeholder="Agregue su(s) apellido(s) aqui"
                        />
                        <label for="" class="form-label">Fecha de Nacimiento</label>
                        <input
                            type="date"
                            class="form-control"
                            name="fechan"
                            id=""
                            aria-describedby="helpId"
                        />
                        <label for="" class="form-label">Correo</label>
                        <input
                            type="email"
                            class="form-control"
                            name="correo"
                            id=""
                            aria-describedby="helpId"
                            placeholder="Agregue el correo electronico aqui"
                        />
                        <label for="" class="form-label">Contraseña</label>
                        <input
                            type="text"
                            class="form-control"
                            name="pssword"
                            id=""
                            aria-describedby="helpId"
                            placeholder="Agregue aqui la contraseña"
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