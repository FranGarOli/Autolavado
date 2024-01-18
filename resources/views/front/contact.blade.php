@extends('layout')
@section('titulo', 'Contacto')

@section('cuerpo')
<main class="mt-5 d-flex flex-column gap-5 container">

    <div class="d-flex mt-5 flex-column align-items-center text-center">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5982.322126102988!2d-0.37878204936262905!3d39.496234332533945!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd6045e2e4080603%3A0xb7c3891a970f0262!2sAuto%20lavado%20Jos%C3%A9%20Garc%C3%ADa!5e0!3m2!1ses!2ses!4v1681404817069!5m2!1ses!2ses"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe><br>
        <p>Nos encontramos en Carrer de la Vila de Manuel, 6, 46019</p>
    </div>

    <div class="d-flex flex-column mt-5 align-items-center text-center">
        <form action="{{ route('sendEmail') }}" method="post" class="mt-5">
            @csrf

            <h1 class="mb-3">Contacta con nosotros!</h1>

            <div class="campos-formulario form-group mb-4">
                <label for="form4Example1" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="name" id="form4Example1">
            </div>

            <div class="campos-formulario form-group mb-4">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="email">
            </div>

            <div class="campos-formulario form-group mb-4">
                <label for="mensaje" class="form-label">Mensaje</label>
                <textarea name="mensaje" class="form-control md-textarea-auto-grow w-100" id="mensaje" cols="50"
                    rows="5" placeholder="Introduce aquí tu mensaje..."></textarea>
            </div>

            <button type="submit" class="btn btn-primary btn-block mb-4">Enviar</button>
        </form>
    </div>
</main>
@endsection
