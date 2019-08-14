@extends('plantilla')

@section('titulo', 'Contacto')

@section('contenido')
	<h1>Contacto</h1>

	<form method="post" action={{ route('mensajes.store') }}>
		{{-- crear no tiene acceso a una instancia de mensaje --}}
		@include('mensajes.form', ['mensaje' => new App\Mensaje])
	</form>

@endsection