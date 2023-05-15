@extends('layoutback')

@section('titulo', 'Crear servicio')
@section('cuerpo')
    <main>
        <!--DESCRIPCION, PRECIO, CATEGORIA (FALTA MIGRACION)-->
        <form action="{{ route('services.store') }}" method="POST"
            class=" d-flex flex-column justify-content-center align-content-center flex-wrap">
            @csrf

            <h1 class="mt-5 text-center">Crear servicio</h1>

            <div class="form-group mb-4">
                <label class="form-label" for="title">Titulo</label>
                <input type="text" name="title" id="title" class="form-control">
            </div>

            <div class="form-group mb-4">
                <label for="description" class="form-label">Descripción</label>
                <textarea name="description" class="form-control md-textarea-auto-grow w-100" id="description" cols="50"
                    rows="5" placeholder="Introduce aquí el texto explicativo sobre dicho servicio..."></textarea>
            </div>

            <div class="form-group mb-4">
                <label class="form-label" for="price">Precio</label>
                <input type="text" name="price" id="price" class="form-control">
            </div>

            <!--FALTA AÑADIR CATEGORIA EN MIGRACION-->
            <div class="form-group mb-4 d-flex justify-content-center align-items-center">
                <label class="form-label" for="category">Categoría
                    <select name="category" id="category">
                        <option value="Limpieza de tapiceria">Limpieza de tapiceria</option>
                        <option value="Limpieza interior">Limpieza interior</option>
                        <option value="Limpieza exterior">Limpieza exterior</option>
                        <option value="Limpieza de motor">Limpieza de motor</option>
                        <option value="Limpieza completa">Limpieza completa</option>
                        <option value="Pulida">Pulida</option>
                        <option value="Desinfeccion">Desinfeccion</option>
                        <option value="Productos">Productos</option>
                        <option value="Oferta">Oferta</option>
                    </select>
                </label>
            </div>

            <div class="form-group mb-4 text-center">
                <span>Visible <input type="checkbox" name="visible" id="visible"></span>
            </div>

            <button type="submit" class="btn btn-primary btn-block mb-4">Crear</button>
        </form>
    </main>
@endsection
