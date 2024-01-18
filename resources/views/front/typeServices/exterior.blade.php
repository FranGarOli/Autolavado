@extends('layout')
@section('titulo', 'Contacto')

@section('cuerpo')
    <main class=" d-flex flex-column gap-5 text-center mt-5">

        <div class="container mt-5 d-flex flex-column gap-5">
            <div class="d-flex flex-column bg-light border rounded p-5">
                <h1>Limpieza exterior manual</h1>
                <p class="container justify-content-center">El lavado exterior manual se efectúa primeramente con un
                    prelavado en alta presión de agua blanda (para actuar mejor los productos) detergentes biodegradables pH
                    neutros con un punto de densidad de espuma para crear una película entre la esponja y la carrocería
                    consiguiendo no rayar la pintura al lavarlo enjuague del vehículo en alta presión con agua dura y
                    terminación con agua osmotizada secado con gamuza.
                </p>

                <div class="d-flex flex-row justify-content-center align-items-center gap-3">
                    <div class="col-sm-6">
                        <img src="https://www.autolavadogarcia.com/uploads/img4f38f5ec62ae3.jpg" class="img-fluid"
                            width="400px" />
                        <img src="https://www.autolavadogarcia.com/uploads/img4f4a19286e03d.jpg" class="img-fluid"
                            width="400px" />
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table mt-4">
                        <thead>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">TURISMOS</th>
                                <th scope="col">MONOVOLUMENES</th>
                                <th scope="col">TODO TERRENOS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">PRECIO</th>
                                <td>15 €</td>
                                <td>17 €</td>
                                <td>20 €</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="d-flex flex-column bg-light border rounded p-5">
                <h1>Limpieza exterior automática</h1>
                <p class="container justify-content-center">El lavado exterior automático se efectúa nebulizando producto
                    exento
                    de sosas en faldones ,ruedas, cristal
                    delantero y para golpes delantero y matrícula posteriormente PRELAVADO EN ALTA PRESION y repaso
                    manualmente
                    de rincones donde la máquina no puede acceder(retrovisores huecos de matricula,alerones,espolier etc )
                    posteriormente la maquina lavara el vehículo siendo esta de carlite cien por cien para garantizar el NO
                    RAYAR el vehículo.
                </p>

                <div class="d-flex flex-row justify-content-center align-items-center gap-3">
                    <div class="col-sm-6">
                        <img src="https://www.autolavadogarcia.com/uploads/img4f38f8c9c9090.jpg" class="img-fluid"
                            width="400px" />
                        <img src="https://www.autolavadogarcia.com/uploads/img4f4a16c433e39.jpg" class="img-fluid"
                            width="400px" />
                    </div>
                </div>

                <div class="table-responsive">
                    <table class="table mt-4">
                        <thead>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">TURISMOS</th>
                                <th scope="col">MONOVOLUMENES</th>
                                <th scope="col">TODO TERRENOS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">PRECIO</th>
                                <td>6,50 €</td>
                                <td>8,50 €</td>
                                <td>10,50 €</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </main>
@endsection
