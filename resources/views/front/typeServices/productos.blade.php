@extends('layout')
@section('titulo', 'Contacto')

@section('cuerpo')
    <main class=" d-flex flex-column gap-5 text-center mt-5">

        <div class="d-flex flex-column p-5 gap-3 justify-content-center">
            <div class="d-flex flex-column bg-light border rounded p-5 gap-3 justify-content-center">
                <h1>Venta de aceite total</h1>
                <p>En auto lavado García después de muchos años de experiencia y por la demanda de nuestros clientes optamos
                    por tener aceites de primeras marcas del mercado dándole a su vehículo la seguridad de poder hacer los
                    cambios de aceite con los máximos intervalos de kilómetros y con la máxima confianza y garantía que nos
                    da la marca.
                </p>
            </div>

            <div class="d-flex flex-row justify-content-center align-items-center gap-3">
                <div class="col-sm-6">
                    <img src="https://www.autolavadogarcia.com/uploads/img5d6e50cbe1145.jpg" class="img-fluid"
                        width="900px" />
                    <img src="https://www.autolavadogarcia.com/uploads/img5d6e50eadf022.jpg" class="img-fluid" />
                </div>
            </div>

            <div class="d-flex flex-row bg-light border rounded p-5 gap-3 justify-content-center">
                <div class="col-sm-6">
                    <h1>Venta de aceite petronas</h1>
                    <img src="https://www.autolavadogarcia.com/uploads/img5d6e51dc9d536.jpg" class="img-fluid"
                        alt="Aceite petronas">
                </div>
            </div>

            <div class="d-flex flex-row justify-content-center align-items-center gap-3  bg-light border rounded p-5">
                <div class="col-sm-6">
                    <h1>Liquido limpia parabrisas</h1>
                    <img src="https://www.autolavadogarcia.com/uploads/img51123f1f35a87.jpg" class="img-fluid"
                        alt="Limpiaparabrisas">
                    <h1>Precio: 5€</h1>
                </div>
            </div>

            <div class="d-flex flex-row bg-light border rounded p-5 gap-3 justify-content-center">
                <div class="col-sm-6">
                    <h1>Antihumos Liquimoly</h1>
                    <p>ANTIHUMOS LIQUIMOLY Disminuye la expulsión de hollín y contaminantes inmediatamente después de
                        añadirlo Limpia el sistema de inyección diesel y hace que el motor marche mas tranquilo
                        Optimiza los índices de la ITV</p>
                    <div>
                        <img src="https://www.autolavadogarcia.com/uploads/img4f4b43ac86629.jpg" alt="Liquimoly foto">
                    </div>
                    <h1>Precio: 13€</h1>

                </div>
            </div>

    </main>
@endsection
