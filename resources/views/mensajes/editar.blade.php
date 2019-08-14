@extends('plantilla')

@section('titulo', 'Mensaje')

@section('contenido')
	<h1>Mensaje</h1>

	{{-- editar tiene acceso a una instancia de mensaje --}}
	<form method="post" action={{ route('mensajes.update', $mensaje->id) }}>
		{!! method_field('PUT') !!}
		@include('mensajes.form', ['btnText' => 'Actualizar'])
	</form>	

@endsection
