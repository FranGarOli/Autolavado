@extends('layoutback')

@section('titulo', 'Crear registro')
@section('cuerpo')
    <main>
        <h1>Crear registro</h1>
        <form action="{{route('registers.store')}}" method="post">
            @csrf

            <br>
            <h2>Cliente</h2><hr>
            <div class="campos-formulario">
                <label for="name">Nombre del cliente</label>
                <input type="text" name="name" id="name">
            </div>

            <div class="campos-formulario">
                <label for="dni">DNI</label>
                <input type="text" name="dni" id="dni">
            </div>

            <div class="campos-formulario">
                <label for="email">Email</label>
                <input type="email" name="email" id="email">
            </div>

            <div class="campos-formulario">
                <label for="phone">Teléfono del cliente</label>
                <input type="text" name="phone" id="phone">
            </div>
            <br>
            <h2>Servicio</h2><hr>
            <div class="campos-formulario">
                <label for="service" id="labelServicio">Servicio
                    <div id="contenedorDataList" class="contenedorDataList">

                    </div>
                    <input type="button" value="Añadir servicio" id="anyadirServicio">
                </label>

            </div>

            <input type="submit" value="Crear">
        </form>
    </main>
@endsection
