@extends('template')
@section('content') 
    <div class="table-responsive" >
        <table class="table table-primary">
            <thead>
                {{-- <tr>
                    <th scope="col">Column 1</th>
                    <th scope="col">Column 2</th>
                    <th scope="col">Column 3</th>
                </tr> --}}
            </thead>
            <tbody>
                <tr class="">

                    @foreach($juegos as $key => $juego)
                        @if($key % 4 == 0 && $key != 0)
                            </tr><tr>
                        @endif
                        <td>
                            <center>
                                <img src="{{ $juego->imagen }}" alt="img-juego" srcset="" width="200" height="200"> <br> 
                                {{$juego->nombre}} <br>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal{{$key}}">
                                    Ver más informacion
                                </button>
                                <div class="modal fade" id="exampleModal{{$key}}" tabindex="-1" aria-labelledby="exampleModalLabel{{$key}}" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel{{$key}}">{{$juego->nombre}}</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <img src="{{ $juego->imagen }}" alt="img-juego" srcset="" width="200" height="200"> <br> 
                                                {{$juego->descripcion}}
                                            </div>
                                            <div class="modal-footer">
                                                <form action="{{ route('carritos.store') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="juego_id" value="{{ $juego->id_juego }}">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Agregar a carrito</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </center> 
                        </td>
                    @endforeach
                </tr>
                
            </tbody>
        </table>
    </div>
@endsection
