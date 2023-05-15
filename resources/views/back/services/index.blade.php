@extends('layoutback')

@section('titulo', 'Crear servicio')
@section('cuerpo')
    <main>
        <!--TITULO, PRECIO, CHECKBOX MOSTRAR, BTN ELIMINAR-->
        <table class="table align-middle mb-0 bg-white">

            <thead class="bg-light">
                <tr>
                    <th>Titulo</th>
                    <th>Precio</th>
                    <th>Visibilidad</th>
                    <th>Eliminar</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($services as $service)

                    <!--COLUMNA TITULO SERVICIO-->
                    <tr>

                        <td>
                            <div class="d-flex align-items-center">
                                <div class="ms-3">
                                    <p class="fw-bold mb-1">{{ $service->title }}</p>
                                </div>
                            </div>
                        </td>

                        <!--COLUMNA PRECIO SERVICIO-->
                        <td>
                            <div class="d-flex align-items-center">
                                <div class="ms-3">
                                    <p class="fw-normal mb-1">{{ $service->price }} €</p>
                                </div>
                            </div>
                        </td>

                        <!--COLUMNA VISIBILIDAD SERVICIO (formulario)-->
                        <td>
                            <div class="d-flex gap-1 align-items-center ">
                                <span>No mostrar</span>
                                <input type="checkbox" name="visible" id="visible">
                            </div>
                        </td>

                        <!--COLUMNA ELIMINAR SERVICIO (formulario)-->
                        <td>
                            <button type="button" class="btn btn-link btn-sm btn-rounded">
                                Eliminar
                            </button>
                        </td>

                    </tr>

            </tbody>
        </table>
    </main>
@endsection
