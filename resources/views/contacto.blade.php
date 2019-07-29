@extends('plantilla')

@section('titulo', 'Contacto')

@section('contenido')
	<h1>Contacto</h1>

	<form method="post" action={{ route('mensajes.store') }}>
		@csrf

		<div class="form-group">
			<label for="nombre">Nombre</label>
			<input type="input" class="form-control" id="nombre" name="nombre" placeholder="Ingrese aquí su nombre">
		</div>

		<div class="form-group">
			<label for="correo">Correo</label>
			<input type="email" class="form-control" id="correo" name="correo" placeholder="Ingrese aquí su correo">
		</div>

		<div class="form-group">
			<label for="asunto">Asunto</label>
			<input type="input" class="form-control" id="asunto" name="asunto" placeholder="Motivo por el que se comunica con nosotros">
		</div>

		<div class="form-group">
			<label for="contenido">Contenido</label>
			<textarea class="form-control" id="contenido" name="contenido" rows="3"></textarea>
		</div>

		<button type="submit" class="btn btn-primary">Enviar</button>
	</form>

@endsection