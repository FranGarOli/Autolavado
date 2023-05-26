@extends('layout')

@section('titulo', 'Autolavado García')

@section('cuerpo')
    <main class="mt-5">
        @if (session('mensaje'))
            <div class="alert alert-success">
                {{ session('mensaje') }}
            </div>
        @endif
        <div class="reservas d-flex justify-content-center align-content-center">

            <form class="formulario" class="d-flex flex-column" action="{{ route('saveBooking') }}" method="post">
                @csrf

                <h1 class="mt-5 text-center">Reserva tu cita!</h1>

                <div class="form-group mb-1 ">
                    <label class="form-label" for="name">Nombre completo: </label>
                    <input class="form-control" type="text" name="name" id="name" value="{{ old('name') }}">
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group mb-1">
                    <label class="form-label" for="dni">DNI: </label>
                    <input class="form-control" type="text" name="dni" id="dni" value="{{ old('dni') }}">
                    @error('dni')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group mb-1">
                    <label class="form-label" for="phone">Teléfono: </label>
                    <input class="form-control" type="text" name="phone" id="phone" value="{{ old('phone') }}">
                    @error('phone')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group mb-1">
                    <label class="form-label" for="email">Correo electrónico: </label>
                    <input class="form-control" type="email" name="email" id="email" value="{{ old('email') }}">
                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group mb-1">

                    <label for="service" class="form-label" id="labelServicio">Servicio
                        <div id="contenedorDataList" class="contenedorDataList">
                            <!--Input que genera name=servicio1"-->
                        </div>
                        <br>
                        <input type="button" value="Añadir servicio" id="anyadirServicio">
                        <input type="button" value="Borrar servicios" id="borrarServicios">
                    </label>


                    <input type="hidden" name="servicios" id="servicios">

                </div>

                <div class="form-group mb-1">
                    <label class="form-label" for="model">Modelo del coche: </label>
                    <input class="form-control" type="text" name="model" id="model" value="{{ old('model') }}">
                    @error('model')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group mb-1">
                    <label class="form-label" for="model">Matrícula del coche: </label>
                    <input class="form-control" type="text" name="plate" id="plate" value="{{ old('plate') }}">
                    @error('plate')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group mb-1">
                    <label class="form-label" for="datetime">Escoge hora: de 9:00 a 14:00 y de 16:00 a 20:00h</label>
                    <input class="form-control" type="datetime-local" name="datetime" id="datetime"
                        placeholder="de 9:00 a 14:00 y de 16:00 a 20:00h" value="{{ old('datetime') }}">
                    @error('datetime')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="btn-formulario text-center mt-3">
                    <input type="submit" class="btn btn-primary" value="Reservar">
                </div>
            </form>
        </div>
    </main>

@endsection
