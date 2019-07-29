

@extends('plantilla')

@section('titulo', 'Mensaje')

@section('contenido')
    <h1>Mensaje</h1>

    <form method="post" action="{{ route('mensajes.update',  $mensaje->id) }}">
        @csrf
        {!! method_field('PUT') !!}
        <input name="nombre" placeholder="Nombre..." 
               value="{{ $mensaje->nombre }}"><br>
        {!! $errors->first('nombre', '<small>:message</small>') !!} <br>

        {!! method_field('PUT') !!}
        <input type="email" name="email" placeholder="Correo..."   
               value="{{ $mensaje->email }}"><br>
        {!! $errors->first('correo', '<small>:message</small>') !!} <br>
        
        <input name="asunto" placeholder="Asunto..." 
               value="{{ $mensaje->asunto }}"><br>
        {!! $errors->first('asunto', '<small>:message</small>') !!} <br>
        
        <textarea name="contenido" placeholder="Contenido...">
            {{ $mensaje->contenido }}
        </textarea><br>
        {!! $errors->first('contenido', '<small>:message</small>') !!}
        <br>
        <button>Enviar</button>
    </form> 

@endsection
