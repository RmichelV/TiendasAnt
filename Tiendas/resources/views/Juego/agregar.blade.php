<!-- Modal -->
<div class="modal fade" id="agregar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Nueva Juego</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('juegos.store')}}" method="post">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="" class="form-label">Nombre del juego: </label>
                        <input
                            type="text"
                            class="form-control"
                            name="nombre"
                            id=""
                            aria-describedby="helpId"
                            placeholder="Agregue el nombre del juego aqui"
                        />
                        <label for="" class="form-label">Descripcion del juego</label>
                        <input
                            type="text"
                            class="form-control"
                            name="descripcion"
                            id=""
                            aria-describedby="helpId"
                            placeholder="Agregue la descripcion del juego aqui"
                        />
                        <label for="" class="form-label">Cantidad de jugadores </label>
                        <input
                            type="text"
                            class="form-control"
                            name="cantidad"
                            id=""
                            aria-describedby="helpId"
                            placeholder="Agregue aqui la cantidad minima y maxima de jugadores"
                        />
                        <label for="" class="form-label">Precio</label>
                        <input
                            type="text"
                            class="form-control"
                            name="precio"
                            id=""
                            aria-describedby="helpId"
                            placeholder="Agregue el precio del juego aqui"
                        />
                        <label for="" class="form-label">Cantidad en Stock</label>
                        <input
                            type="text"
                            class="form-control"
                            name="stock"
                            id=""
                            aria-describedby="helpId"
                            placeholder="Agregue la cantidad de stock que posee del juego aqui"
                        />

                        <label for="" class="form-label">Imagen del juego </label>
                        <input
                            type="text"
                            class="form-control"
                            name="imagen"
                            id=""
                            aria-describedby="helpId"
                            placeholder="Agregue la direccion URL (link) de la imagen aqui"
                        />
                        <label for="" class="form-label">Seleccione los generos  </label>

                        @foreach ($generos as $genero)
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="generos[]" value="{{$genero->id_genero}}">
                                <label class="form-check-label" for="">{{$genero->nombre}}</label>
                            </div>
                        @endforeach

                        <label for="" class="form-label">Seleccione las plataformas  </label>
                        @foreach ($plataformas as $plataforma)
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="plataformas[]" value="{{$plataforma->id_plataforma}}">
                                <label class="form-check-label" for="">{{$plataforma->nombre}}</label>
                            </div>
                        @endforeach
                        {{-- <label for="" class="form-label">Pertenece a: </label>
                        <select name="user" id="" class="form-control">
                            @foreach ($users as $user)
                                <option value="{{$user->id}}">{{$user->name}}</option>
                            @endforeach
                        </select> --}}
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