<!-- Modal -->
<div class="modal fade" id="agregar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Nueva Juego</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{route('juegos.store')}}" method="post" onsubmit="return validarFormulario()">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="" class="form-label">Nombre del juego: </label>
                            <input
                                type="text"
                                class="form-control"
                                name="nombre"
                                id="nombre"
                                aria-describedby="helpId"
                                placeholder="Agregue el nombre del juego aqui"
                                required
                            />
                            <small id="helpId" class="form-text text-muted">Por favor no utilice @ / _ . , " " ' ' u otros similares </small>
                            <div id="nombre-error" class="alert alert-danger" style="display: none;">
                                Por favor ingrese un nombre valido
                            </div>
                        <label for="" class="form-label">Descripcion del juego</label>
                            <input
                                type="text"
                                class="form-control"
                                name="descripcion"
                                id="descripcion"
                                aria-describedby="helpId"
                                placeholder="Agregue la descripcion del juego aqui"
                                required
                            />
                        <label for="" class="form-label">Cantidad de jugadores </label>
                            <input
                                type="text"
                                class="form-control"
                                name="cantidad"
                                id="cantidad"
                                aria-describedby="helpId"
                                placeholder="Agregue aqui la cantidad minima y maxima de jugadores"
                                required
                            />
                            <small id="helpId" class="form-text text-muted">Introduzca la cantidad numerica y terminacion en "Jugador(es)" </small>
                        <label for="" class="form-label">Precio en Bs.: </label>
                            <input
                                type="text"
                                class="form-control"
                                name="precio"
                                id="precio"
                                aria-describedby="helpId"
                                placeholder="Agregue el precio del juego aqui"
                                required
                            />
                            <small id="helpId" class="form-text text-muted">Para decimales usar el punto " . " </small>
                            <div id="precio-error" class="alert alert-danger" style="display: none;">
                                Por favor ingrese un valor valido
                            </div>
                        <br>
                        <label for="" class="form-label">Cantidad en Stock</label>
                            <input
                                type="text"
                                class="form-control"
                                name="stock"
                                id="stock"
                                aria-describedby="helpId"
                                placeholder="Agregue la cantidad de stock que posee del juego aqui"
                                required
                            />
                            <div id="stock-error" class="alert alert-danger" style="display: none;">
                                Por favor ingrese un valor valido
                            </div>
                        <label for="" class="form-label">Imagen del juego </label>
                            <input
                                type="text"
                                class="form-control"
                                name="imagen"
                                id="imagen"
                                aria-describedby="helpId"
                                placeholder="Agregue la direccion URL (link) de la imagen aqui"
                                required
                            />
                        <label for="" class="form-label">Seleccione los generos </label>
                            @foreach ($generos as $genero)
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="generos[]" id="generos" value="{{$genero->id_genero}}">
                                    <label class="form-check-label" for="">{{$genero->nombre}}</label>
                                </div>
                            @endforeach
                            <div id="generos-error" class="alert alert-danger" style="display: none;">
                                Por favor seleccione al menos un genero.
                            </div>
                        <label for="" class="form-label">Seleccione las plataformas  </label>
                            @foreach ($plataformas as $plataforma)
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="plataformas[]" id="plataformas" value="{{$plataforma->id_plataforma}}">
                                    <label class="form-check-label" for="">{{$plataforma->nombre}}</label>
                                </div>
                            @endforeach
                            <div id="plataformas-error" class="alert alert-danger" style="display: none;">
                                Por favor seleccione al menos una plataforma.
                            </div>
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

<script>
    function validarFormulario() {
        var nombre = document.getElementById('nombre').value;
        var precio = document.getElementById('precio').value;
        var stock = document.getElementById('stock').value;
        var imagen = document.getElementById('imagen').value;
        var generos = document.querySelectorAll('input[name="generos[]"]:checked');
        var plataformas = document.querySelectorAll('input[name="plataformas[]"]:checked');


        var nombreExpresion = /^[a-zA-Z0-9\s]+$/;
        var precioExpresion = /^\d+(\.\d{1,2})?$/; 
        var stockExpresion = /^\d+$/;

        if (nombre.trim() === '' || !nombreExpresion.test(nombre)) {
            document.getElementById('nombre-error').style.display = 'block';
            return false;
        }

        if (precio.trim() === '' || !precioExpresion.test(precio)) {
            document.getElementById('precio-error').style.display = 'block';
            return false;
        }

        if (stock.trim() === '' || !stockExpresion.test(stock)) {
            document.getElementById('stock-error').style.display = 'block';
            return false;
        }

        if (generos.length === 0) {
            document.getElementById('generos-error').style.display = 'block';
            return false;
        }

        if (plataformas.length === 0) {
            document.getElementById('plataformas-error').style.display = 'block';
            return false;
        }

        

        return true;
    }
</script>