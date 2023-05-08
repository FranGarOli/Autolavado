@extends('layout')
@section('titulo', 'Contacto')

@section('cuerpo')
    <main>
        <div class="contenedorContacto">

            <div class="mapaContacto">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5982.322126102988!2d-0.37878204936262905!3d39.496234332533945!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd6045e2e4080603%3A0xb7c3891a970f0262!2sAuto%20lavado%20Jos%C3%A9%20Garc%C3%ADa!5e0!3m2!1ses!2ses!4v1681404817069!5m2!1ses!2ses"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                <p>Nos encontramos en Carrer de la Vila de Manuel, 6, 46019</p>
            </div>

            <form action="{{route('sendEmail')}}" method="post" class="formularioContacto">
                @csrf

                <h2>Contacta con nosotros!</h2>

                <div class="campos-formulario">
                    <label for="name">Nombre</label>
                    <input type="text" name="name" id="name">
                </div>

                <div class="campos-formulario">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email">
                </div>

                <div class="campos-formulario">
                    <label for="mensaje">Mensaje</label>
                    <textarea name="mensaje" id="mensaje" cols="50" rows="5"
                              placeholder="Introduce aquí tu mensaje..."></textarea>
                </div>

                <input type="submit" value="Enviar">
            </form>


        </div>
    </main>
@endsection

