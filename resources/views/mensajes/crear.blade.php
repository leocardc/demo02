
@extends('plantilla')

@section('titulo', 'Contacto')

@section('contenido')
    <h1>Contacto</h1>

    @if(session()->has('info'))
        <h3> {{ session('info') }} </h3>
    @endif

    

    <form method="post" action={{ route('mensajes.store') }}>
    @csrf
        <input name="nombre" placeholder="Nombre..." value="{{ old('nombre') }}"><br>
        {!! $errors->first('nombre', '<small>:message</small>') !!} <br>
        <input type="email" name="correo" placeholder="Correo..." value="{{ old('correo') }}"><br>
        {!! $errors->first('correo', '<small>:message</small>') !!} <br>
        <input name="asunto" placeholder="Asunto..." value="{{ old('asunto') }}"><br>
        {!! $errors->first('asunto', '<small>:message</small>') !!} <br>
        <textarea name="contenido" placeholder="Mensaje..." value="{{ old('contenido') }}"></textarea><br>
        {!! $errors->first('contenido', '<small>:message</small>') !!} <br>
        <button>Enviar</button>
    </form>
@endsection
