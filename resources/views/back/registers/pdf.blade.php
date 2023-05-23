<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Factura</title>
    <style>
        /* Estilos personalizados para la factura */
        /* Puedes personalizar los estilos según tus necesidades */

        .invoice-header {
            padding: 20px;
            background-color: #f8f9fa;
        }

        .invoice-body {
            padding: 20px;
        }

        .invoice-footer {
            padding: 20px;
            background-color: #f8f9fa;
        }
    </style>
    <!--BOOTSTRAP 5-->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.0/mdb.min.js"></script>

    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.0/mdb.min.css" rel="stylesheet" />

    <!--BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="invoice-header text-center mb-4">
                    <img src="https://i.postimg.cc/W3f0BNcg/image.png" alt="" width="400px">
                </div>
            </div>
            <div class="d-flex flex-col text-center">
                <p>Dirección: Carrer de la Vila de Manuel, 6, 46019</p>
                <p>Email: info@autolavadogarcia.com</p>
                <p>Teléfono: + 34 623 55 19 30</p>
            </div>
        </div>

        <div class="d-flex flex-row">
            <div class="d-flex flex-column">
                <h3>Información del cliente:</h3>
                <p>Nombre: {{ $register->client->name }}</p>
                <p>DNI: {{ $register->client->dni }}</p>
                <p>Telefono: {{ $register->client->phone }}</p>
                <p>Dirección email: {{ $register->client->email }}</p>
            </div>
            <div class="d-flex flex-column">
                <h3>Información de la factura:</h3>
                <p>Número de factura: {{ $register->id }}</p>
                <p>Fecha: {{ $register->created_at }}</p>
                <p>Modelo del vehículo: {{ $register->model }}</p>
                <p>Matrícula del vehículo: {{ $register->plate }}</p>
                <!-- Agrega más detalles de la factura aquí -->
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <h3>Detalles de la factura:</h3>
                <div class="invoice-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Servicio</th>
                                <th>Cantidad</th>
                                <th>Precio</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @php($total = 0)

                                @forelse($register->services as $service)
                                    @php($total += $service->price)

                                    <td>{{ $service->title }}</td>
                                    <td>1</td>
                                    <td>{{ $service->price }} €</td>
                            </tr>
                        @empty
                            <p>No hay servicios asociados...</p>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="invoice-footer justify-content-end">
                    <h4>Total: {{ $total }} €</h4>
                </div>
            </div>
        </div>

    </div>

    </div>
</body>

</html>
