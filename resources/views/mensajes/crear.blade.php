
@extends('plantilla')

@section('titulo', 'Contacto')

@section('contenido')
    <h1>Contacto</h1>

    @if(session()->has('info'))
        <h3> {{ session('info') }} </h3>
    @endif

    

    <form method="post" action={{ route('mensajes.store') }}>
    @csrf
    @if (auth()->guest())
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="input" class="form-control" id="nombre" 
                       name="nombre" placeholder="Ingrese aquí su nombre">
            </div>

            <div class="form-group">
                <label for="email">Correo</label>
                <input type="email" class="form-control" id="email" name="email"
                       placeholder="Ingrese aquí su correo">
            </div>
        @endif

        <input name="asunto" placeholder="Asunto..." value="{{ old('asunto') }}"><br>
        {!! $errors->first('asunto', '<small>:message</small>') !!} <br>
        <textarea name="contenido" placeholder="Mensaje..." value="{{ old('contenido') }}"></textarea><br>
        {!! $errors->first('contenido', '<small>:message</small>') !!} <br>
        <button>Enviar</button>
    </form>
@endsection
