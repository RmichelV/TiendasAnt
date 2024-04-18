@extends('template')
@section('content')

<h1>Bienvenido</h1>
@auth
{{ Auth::user()->name }}
@else 
<h1> INVITADO</h1>
@endauth

@endsection