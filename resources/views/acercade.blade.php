@extends('plantilla')

@section('titulo')
    acerca de
@endsection

@section('contenido')
   <h1>Acerca de</h1>
   Bienvenid@ {{ $nombre ?? 'Leonardo' }}
@endsection
