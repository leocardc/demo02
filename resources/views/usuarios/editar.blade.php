@extends('plantilla')

@section('titulo', 'Usuario')

@section('contenido')
	<br>
	<h3>Editar usuarios</h3>
	<br>
    
    @if (session()->has('info'))
		<div class="alert alert-success">{{ session('info') }}</div>
	@endif

	<form method="post" action={{ route('usuarios.update', $usuario->id) }}>
		{!! method_field('PUT') !!}
		@include('usuarios.form')
		<button type="submit" class="btn btn-primary">Actualizar</button>
	</form>	

@endsection
