@extends('plantilla')
@section('titulo', 'Mensaje')
@section('contenido')
    <h1>Mensajes</h1>
   <p> Enviado por {{ $mensaje->nombre }} - 
                   {{ $mensaje->email }}</p>
   <p> {{ $mensaje->contenido }} </p>

@endsection