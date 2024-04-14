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
                    <td><img src="{{ $juego->imagen }}" alt="img-juego" srcset="" width="200" height="200"><br>{{$juego->nombre}}</td>
                    @endforeach
                </tr>
                
            </tbody>
        </table>
    </div>
@endsection
