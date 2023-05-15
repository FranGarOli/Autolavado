@extends('layout')

@section('titulo', 'Autolavado García')
@section('cuerpo')
Search

<div class="containter mt-5 d-flex flex-column justify-content-center align-content-center flex-wrap">
    <h1 class="mt-5 text-center">Inicio de sesión</h1>

    <form action="{{ route('login') }}" method="POST" class="h-50">
        @csrf

        <div class="form-group mb-4">

            <label class="form-label" for="username">Nombre de usuario: </label>
            <input type="text" name="username" value="fran" id="username" class="form-control">
        </div>

        <div class="form-group mb-4">
            <label class="form-label"for="password">Contraseña:</label>
            <input type="password" name="password" id="password" value="fran" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary btn-block mb-4">Acceder</button>
    </form>
</div>
@endsection
