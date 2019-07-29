@extends('plantilla')

@section('titulo', 'Todos los mensajes')

@section('contenido')
    <br>
	<h3>Todos los mensajes</h3>

    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Asunto</th>
                <th>Contenido</th>
                <th>Acciones</th>
            </tr>
        </thead>
        
        <tbody>
            @foreach ($mensajes as $mensaje)
                <tr>
                    <td>
                        <a href="{{ route('mensajes.show', $mensaje->id) }}">
                            {{ $mensaje->nombre}}
                        </a>
                    </td>
                    <td>{{ $mensaje->email}}</td>
                    <td>{{ $mensaje->asunto}}</td>
                    <td>{{ $mensaje->contenido}}</td>
                    <td>

                    <div class="btn-group" role="group">
                            <div class="col-md-6 custom">
                                <a class="btn btn-info btn-sm" href="{{ route('mensajes.edit', $mensaje->id) }}">Editar</a>    
                            </div>
                            <div class="col-md-6 custom">
                                <form method="POST" action="{{ route('mensajes.destroy', $mensaje->id) }}">
                                    @csrf
                                    {!! method_field('DELETE') !!}
                                    <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection