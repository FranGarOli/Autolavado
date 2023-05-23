@extends('layoutback')

@section('titulo', 'Crear registro')
@section('cuerpo')
    <main>

        <form action="{{ route('registers.store') }}" method="post" class="mt-5 d-flex flex-column gap-5">
            @csrf

            <div class="d-flex flex-row gap-4">
                <div class="d-flex flex-column">
                    <h2>Cliente</h2>
                    <hr>

                    <div class="campos-formulario">
                        <label for="name">Nombre del cliente</label>

                        <input type="text" name="name" id="nameClient" list="nameList" autocomplete="off" value="{{old('name')}}">
                        <datalist id="nameList">
                            <!--Option generado en js saca nombres"-->
                        </datalist>
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="campos-formulario">
                        <label for="dni">DNI</label>
                        <input type="text" name="dni" id="dni" autocomplete="off" value="{{old('dni')}}">
                        @error('dni')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="campos-formulario">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" value="{{old('email')}}">
                        @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="campos-formulario">
                        <label for="phone">Teléfono del cliente</label>
                        <input type="text" name="phone" id="phone" value="{{old('phone')}}">
                        @error('phone')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="d-flex flex-column">
                    <h2>Servicio</h2>
                    <hr>
                    <div class="campos-formulario">

                        <label for="service" id="labelServicio">Servicio
                            <div id="contenedorDataList" class="contenedorDataList">
                                <!--Input que genera name=servicio1"-->
                            </div>
                            <br>
                            <input type="button" value="Añadir servicio" id="anyadirServicio">
                            <input type="button" value="Borrar servicios" id="borrarServicios">
                        </label>
                    </div>
                </div>

                <div class="d-flex flex-column">
                    <h2>Coche</h2>
                    <hr>
                    <div class="campos-formulario">
                        <label for="model">Modelo</label>
                        <input type="text" name="model" id="model" value="{{old('model')}}">
                        @error('model')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="campos-formulario">
                        <label for="plate">Matricula</label>
                        <input type="text" name="plate" id="plate" value="{{old('plate')}}">
                        @error('plate')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="campos-formulario">
                        <label for="date">Fecha de recogida</label>
                        <input type="datetime-local" name="limitDate" id="datetime" value="{{old('limitDate')}}">
                        @error('limitDate')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <input type="hidden" name="servicios" id="servicios">

            <div>
                <input type="submit" class="btn btn-primary btn-block mb-4" value="Crear registro">
            </div>
        </form>
    </main>
@endsection
