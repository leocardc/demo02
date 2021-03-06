
@extends('plantilla')

@section('titulo', 'Agregar producto')

@section('contenido')

  <h1>Agregar nuevo producto</h1>

  <form method="POST" action="{{ route('productos.store') }}">
       @csrf
        <label>
            Nombre del producto <br>
            <input type="text" name="nombre">
        </label>
        <br>

        <label>
            Precio <br>
            <input type="text" name="precio">
        </label>
        <br>
        <label>
            IVA <br>
            <input type="text" name="iva">
        </label>
        <br>
        <label>
            Cantidad disponible <br>
            <input type="text" name="cantidad_disponible">
        </label>
        <br>
        <label>
            Cantidad mínima <br>
            <input type="text" name="cantidad_minima">
        </label>
        <br>
        <label>
            Cantidad máxima <br>
            <input type="text" name="cantidad_maxima">
        </label>
        <br>
        <label>
            URL <br>
            <input type="text" name="url">
        </label>
        <br><br>
        <button>Guardar</button>
  </form>

@endsection
