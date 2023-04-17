<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo')</title>
    <link rel="stylesheet" href="/css/estilo.css">
    <script src="https://code.iconify.design/iconify-icon/1.0.5/iconify-icon.min.js"></script>
</head>
<body>
<!-- INCLUIMOS LA CABECERA (Diferenciar front - back)-->
@include('partials.navfront')

<!-- CARGAMOS EL CONTENIDO-->
@yield('cuerpo')

<!-- INCLUIMOS EL FOOTER-->
@include('partials.footerfront')
</body>
</html>
