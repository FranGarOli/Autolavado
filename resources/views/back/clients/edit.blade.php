@extends('layoutback')

@section('titulo', 'Autolavado García')
@section('cuerpo')

    <main class="container d-flex flex-column gap-5">

        @if (session('mensaje'))
            <div class="alert alert-success">
                {{ session('mensaje') }}
            </div>
        @endif

        <div class="containter d-flex flex-column justify-content-center align-content-center flex-wrap">
            <h1 class="text-center">Editar "{{ $client->name }}"</h1>

            <form action="{{ route('clients.update', ['client' => $client]) }}" method="POST" class="h-50">
                @csrf
                @method('PUT')

                <div class="form-group mb-4">
                    <label class="form-label" for="name">Nombre: </label>
                    <input type="text" name="name" value="{{ $client->name }}" id="name" class="form-control">
                </div>

                <div class="form-group mb-4">
                    <label class="form-label" for="dni">DNI: </label>
                    <input type="text" name="dni" value="{{ $client->dni }}" id="dni" class="form-control">
                </div>

                <div class="form-group mb-4">
                    <label class="form-label" for="phone">Teléfono: </label>
                    <input type="text" name="phone" value="{{ $client->phone }}" id="phone" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary btn-block mb-4">Actualizar</button>
            </form>
        </div>

    </main>
@endsection
