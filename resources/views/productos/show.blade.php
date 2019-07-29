@extends('plantilla')

@section('titulo', "Catálogo | $producto->nombre")

@section('contenido')
   <h1> {{ $producto->nombre }} </h1>
   Precio del producto $ {{ $producto->precio }}
   <br>
   Cantidad disponible: {{ $producto->cantidad_disponible }}
   <br>
   Cantidad mínima: {{ $producto->cantidad_minima }}
   <br>
   Cantidad máxima: {{ $producto->cantidad_maxima }}
   <br><br>
@endsection
