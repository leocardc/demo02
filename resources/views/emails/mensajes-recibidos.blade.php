<!DOCTYPE html>
<html lang="es">
   <head>   ...   </head>
   <body>
       <p>Recibiste un mensaje de:  
          {{ $mensaje['nombre'] }} - 
          {{ $mensaje['correo'] }}
        </p>
        <p><strong>Asunto:</strong> {{ $mensaje['asunto'] }} </p>
        <p><strong>Contenido:</strong> {{ $mensaje['contenido'] }} </p>
   </body>
</html>