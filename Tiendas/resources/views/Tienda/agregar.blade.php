<!-- Modal -->
<div class="modal fade" id="agregar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Nueva tienda</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('tiendas.store')}}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="" class="form-label">Nombre de la tienda</label>
                        <input
                            type="text"
                            class="form-control"
                            name="nombre"
                            id=""
                            aria-describedby="helpId"
                            placeholder="Agregue el nombre de la tienda aqui"
                        />
                        <label for="" class="form-label">Direccion de la tienda</label>
                        <input
                            type="text"
                            class="form-control"
                            name="direccion"
                            id=""
                            aria-describedby="helpId"
                            placeholder="Agregue la direccion de la tienda aqui"
                        />
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