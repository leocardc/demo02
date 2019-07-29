@extends('plantilla')

@section('titulo')
    Catalogo de productos
@endsection

@section('contenido')
   <h1>Lista de productos</h1>
   <a href="{{ route('productos.create') }}">Agregar producto</a>

   <ul>
   @isset ($productos)
          @forelse($productos as $producto)
              <li>
              <a href="{{ route('productos.show', $producto) }}">
                      {{ $producto->nombre }}</a>

               </li>
          @empty
              <li>No hay productos para mostrar</li>
          @endforelse
          {{ $productos->links() }}
       @else
          <li>Catálogo no definido</li>
       @endisset

   </ul>

   Bienvenid@ {{ $nombre ?? 'Leonardo' }}
@endsection

