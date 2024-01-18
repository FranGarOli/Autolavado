<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo')</title>
    <!--<link rel="stylesheet" href="/css/estilo.css">-->
    <script src="https://code.iconify.design/iconify-icon/1.0.5/iconify-icon.min.js"></script>

    <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-BCCEL8JVNV"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-BCCEL8JVNV');
    </script>

    <!--MD BOOTSTRAP 5-->

        <script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.0/mdb.min.js"></script>
        <!-- Font Awesome -->
        <link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        rel="stylesheet"
        />
        <!-- Google Fonts -->
        <link
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
        rel="stylesheet"
        />
        <!-- MDB -->
        <link
        href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.0/mdb.min.css"
        rel="stylesheet"
        />

    <!--LINK BOOTSTRAP?-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <style>
            /* Height for devices larger than 576px */
            @media (min-width: 992px) {
              #intro {
                margin-top: -58.59px;
                height: 50vh !important;
              }
            }
          </style>

          <!--PETICION API SERVICIOS-->
          <script src="{{ asset('peticiones/services.js') }}"></script>
          <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </head>
<body class="d-flex flex-column">
    <!-- INCLUIMOS LA CABECERA (Diferenciar front - back)-->
    @include('partials.navfront')

    <!-- CARGAMOS EL CONTENIDO-->
    @yield('cuerpo')

    <!-- INCLUIMOS EL FOOTER-->
    @include('partials.footerfront')
</body>
</html>
