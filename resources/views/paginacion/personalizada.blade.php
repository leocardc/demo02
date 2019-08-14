{{-- Ver https://laravel.com/docs/5.8/pagination#paginator-instance-methods --}}
{{-- Ejemplos: --}}
Total de registros: {{  $paginator->total() }} 
<br>
Total de registros por página: {{  $paginator->count() }} 
<br>
<a href="{{ $paginator->previousPageURL() }}">< Anterior página</a> 
&nbsp;&nbsp;
<a href="{{ $paginator->nextPageURL() }}">Siguiente página ></a> 
<p>
