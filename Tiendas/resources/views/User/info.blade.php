<!-- Modal editar -->
@foreach ($users as $user)
<div class="modal fade" id="editar{{$user->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Usuario</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('users.update',$user->id)}}" method="post">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="" class="form-label">Nombres</label>
                        <input
                            type="text"
                            class="form-control"
                            name="nombres"
                            id=""
                            aria-describedby="helpId"
                            placeholder="Agregue el rol aqui"
                            value="{{$user->name}}"
                            required
                        />
                        <label for="" class="form-label">Apellidos</label>
                        <input
                            type="text"
                            class="form-control"
                            name="apellidos"
                            id=""
                            aria-describedby="helpId"
                            placeholder="Agregue el rol aqui"
                            value="{{$user->last_name}}"
                        />
                        <label for="" class="form-label">Fecha de nacimiento</label>
                        <input
                            type="date"
                            class="form-control"
                            name="fechan"
                            id=""
                            aria-describedby="helpId"
                            value="{{$user->birthday}}"
                            required
                        />
                        <label for="" class="form-label">Correo</label>
                        <input
                            type="email"
                            class="form-control"
                            name="correo"
                            id=""
                            aria-describedby="helpId"
                            placeholder="Agregue el correo aqui"
                            value="{{$user->email}}"
                            required
                        />
                        <label for="" class="form-label">Contraseña</label>
                        <input
                            type="text"
                            class="form-control"
                            name="pssword"
                            id=""
                            aria-describedby="helpId"
                            placeholder="Agregue la contraseña aqui"
                            value="{{$user->password}}"
                            required
                        />
                        <label for="" class="form-label">Tipo de usuario</label>
                        <select name="rol" id="" class="form-control">
                            @foreach ($roles as $rol)
                            @if($rol->id_rol==$user->id_rol)
                            <option value="{{$rol->id_rol}}" selected> {{$rol->nombre}}</option>
                            @else
                            <option value="{{$rol->id_rol}}"> {{$rol->nombre}}</option>
                            @endif
                            @endforeach
                        </select>
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

@endforeach
@foreach ($users as $user)
    
<!-- Modal ELIMINAR-->
<div class="modal fade" id="eliminar{{$user->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminar usuario</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('users.destroy',$user->id)}}" method="post">
                @csrf
                @method('DELETE')
                <div class="modal-body">
                    Estas seguro de eliminar al usuario  <strong>{{$user->name}}</strong>
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