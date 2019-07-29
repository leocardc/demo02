<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="UTF-8">

   <title>@yield('titulo', 'Tienda')</title>
   <!-- <style>
       .activo a {
           color: red;
           text-decoration: none;
       }
   </style> -->
   <link rel="stylesheet" href="/css/app.css">
   <script async src="/js/app.js"></script>
</head>

<body>
    @include('partials/nav')
    @yield('contenido')

</body>

</html>
