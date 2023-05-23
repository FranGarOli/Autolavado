@extends('layout')
@section('titulo', 'Contacto')

@section('cuerpo')
    <main class=" d-flex flex-column mt-5 gap-5 container text-center">

        <div class="d-flex flex-column bg-light border rounded p-5 gap-3 justify-content-center">
            <h1>Servicio de tapicería completa</h1>

            <div class="container d-flex flex-column justify-content-center align-content-center gap-3">
                <div class="container d-flex justify-content-center align-content-center gap-3">
                    <img src="https://www.autolavadogarcia.com/uploads/img5d6e3c489f382.jpg" alt="">
                    <img src="https://www.autolavadogarcia.com/uploads/img5d6e3c5d772e1.jpg" alt="">
                </div>
                <div class="container d-flex justify-content-center align-content-center gap-3">
                    <img src="https://www.autolavadogarcia.com/uploads/img5da47cdb5a9d9.jpg" alt="">
                    <img src="https://www.autolavadogarcia.com/uploads/img5da47cfd614eb.jpg" alt="">
                </div>

            </div>
            <a href="{{ route('tapicerias') }}">Más información...</a>
        </div>



        <div class="d-flex flex-column bg-light border rounded p-5 gap-3 justify-content-center">
            <h1>Limpieza de motor</h1>

            <div class="container d-flex flex-row justify-content-center align-content-center gap-3">
                    <img src="https://www.autolavadogarcia.com/uploads/img5d6e4c0ca49b4.jpg" width="400px" alt="">
                    <img src="https://www.autolavadogarcia.com/uploads/img5d6e4c1f4ad82.jpg" width="400px" alt="">

            </div>
            <a href="{{ route('motor') }}">Más información...</a>
        </div>

    </main>
@endsection
