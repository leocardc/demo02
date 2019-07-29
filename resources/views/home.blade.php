@extends('plantilla')

@section('titulo')
    Tienda Online
@endsection

@section('contenido')
   <h1>Página de inicio</h1>
   Bienvenid@ {{ $nombre ?? 'Leonardo' }}
@endsection
