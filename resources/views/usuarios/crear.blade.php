
@extends('plantilla')

@section('titulo', 'Contacto')

@section('contenido')
    <h1>Contacto</h1>

    @if(session()->has('info'))
        <h3> {{ session('info') }} </h3>
    @endif

    

    <form method="post" action={{ route('usuarios.store') }}>
    @csrf
        <input name="name" placeholder="Nombre..." value="{{ old('name') }}"><br>
        {!! $errors->first('nombre', '<small>:message</small>') !!} <br>
        <input type="email" name="correo" placeholder="Correo..." value="{{ old('correo') }}"><br>
        {!! $errors->first('correo', '<small>:message</small>') !!} <br>

        <input type="password" name="password" placeholder="Pass..." value="{{ old('password') }}"><br>
        {!! $errors->first('password', '<small>:message</small>') !!} <br>
        
        <input name="role" placeholder="Rol..." value="{{ old('role') }}"><br>
        {!! $errors->first('role', '<small>:message</small>') !!} <br>
        
        
        <button>Enviar</button>
    </form>
@endsection
