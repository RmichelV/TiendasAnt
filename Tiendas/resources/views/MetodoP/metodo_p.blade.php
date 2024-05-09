@extends('template')
@section('content')

<form>
    <div class="form-group">
      <label for="nombre">Nombre en la Tarjeta</label>
      <input type="text" class="form-control" id="nombre" placeholder="Nombre en la Tarjeta" required>
    </div>
    <div class="form-group">
      <label for="numero-tarjeta">Número de Tarjeta</label>
      <input type="text" class="form-control" id="numero-tarjeta" placeholder="Número de Tarjeta" required>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="fecha-expiracion">Fecha de Expiración</label>
        <input type="date" class="form-control" id="fecha-expiracion" required>
      </div>
      <div class="form-group col-md-6">
        <label for="codigo-seguridad">Código de Seguridad</label>
        <input type="text" class="form-control" id="codigo-seguridad" placeholder="CVC" required>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Pagar</button>
  </form>
  
@endsection