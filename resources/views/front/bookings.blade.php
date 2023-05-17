@extends('layout')

@section('titulo', 'Autolavado García')

@section('cuerpo')
<main class="mt-5">
    <div class="reservas d-flex justify-content-center align-content-center">

        <form class="formulario" class="d-flex flex-column ">
            @csrf

            <h1 class="mt-5 text-center">Reserva tu cita!</h1>

            <div class="form-group mb-1 ">
                <label class="form-label" for="name">Nombre completo: </label>
                <input class="form-control" type="text" name="name" id="name">
            </div>

            <div class="form-group mb-1">
                <label class="form-label" for="dni">DNI: </label>
                <input class="form-control" type="text" name="dni" id="dni">
            </div>

            <div class="form-group mb-1">
                <label class="form-label" for="phone">Teléfono: </label>
                <input class="form-control" type="text" name="phone" id="phone">
            </div>

            <div class="form-group mb-1">
                <label class="form-label" for="email">Correo electrónico: </label>
                <input class="form-control" type="email" name="email" id="email">
            </div>

            <div class="form-group mb-1">
                <label class="form-label" for="service">Servicio a realizar: </label>
                <select name="service" id="service">
                    <!--Hacer peticion api sacar servicios-->
                    <option value="op1">Servicio interior y exterior sin llantas</option>
                    <option value="op2">Servicio interior y exterior con llantas y cristales</option>
                    <option value="ta1">Tapicería completa</option>
                </select>
            </div>

            <div class="form-group mb-1">
                <label class="form-label" for="model">Modelo del coche: </label>
                <input class="form-control" type="email" name="model" id="model">
            </div>

            <div class="form-group mb-1">
                <label class="form-label" for="model">Matrícula del coche: </label>
                <input class="form-control" type="text" name="licensePlate" id="licensePlate">
            </div>

            <div class="form-group mb-1">
                <label class="form-label" for="datetime">Escoge hora:</label>
                <input class="form-control" type="datetime-local" name="datetime" id="datetime">
            </div>

            <div class="btn-formulario text-center mt-3">
                <input type="submit" class="btn btn-primary" value="Reservar">
            </div>
        </form>
    </div>
</main>

@endsection
