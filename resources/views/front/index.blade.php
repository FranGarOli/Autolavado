@extends('layout')

@section('titulo', 'Autolavado García')

@section('cuerpo')

<header>
    <!-- Background image -->
    <div
        class="bg-image d-flex justify-content-center align-items-center"
        style="
            background-image: url('https://images.unsplash.com/photo-1506469717960-433cebe3f181?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80');
            height: 100vh;
        ">
        <!--Mascara a la imagen-->
            <div class="mask" style="background-color: rgba(0, 0, 0, 0.2);">
                <div class="container d-flex align-items-center justify-content-center text-center h-100">
                    <div class="text-white">
                    <h1 class="mb-3">AUTOLAVADO GARCÍA</h1>
                    <h5 class="mb-4">Somos una empresa familiar consolidada en el sector limpieza y mantenimiento del vehículo desde 1973, mas de 40 años de experiencia que nos avalan en valencia</h5>

                    <a class="btn btn-outline-light btn-lg m-2" href="" role="button">TRABAJOS REALIZADOS</a>
                    <a class="btn btn-outline-light btn-lg m-2 active" href="{{route('dateBookings')}}" role="button">PEDIR CITA</a>
                    </div>
                </div>
            </div>
    </div>
    <!-- Background image -->
</header>

<!--Main layout-->
<main class="mt-5">
    <div class="container">
      <!--Section: Content-->
      <section>

        <div class="row align-items-center justify-content-center">

          <div class="col-md-6 gx-5 mb-4">
            <div class="bg-image hover-overlay ripple shadow-2-strong rounded-5" data-mdb-ripple-color="light">
              <img src="https://images.unsplash.com/photo-1672840997353-4579d5d6a7d5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1632&q=80" class="img-fluid" />
              <a href="#!">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
              </a>
            </div>
          </div>

          <div class="col-md-6 gx-5 mb-4">
            <h4><strong>Trabajamos para tí</strong></h4>
            <p class="text-muted">
                Con los años de experiencia, la tecnología de las máquinas y los productos de primer
                orden biodegradables, y manteniendo un control del pH tanto para no matizar las pinturas de los vehículos
                (sobre todo los mono capas) , como para no decolorar los tejidos y plásticos del vehículo, logramos unas limpiezas y
                acabados tanto en el interior como en el exterior del vehículo impresionantes e impecables como el primer día sacado del concesionario
            </p>

            <p class="text-muted">
                Esta empresa, tanto la seriedad con el cliente a la hora de aconsejarle un servicio a las necesidades de su vehículo, como la confianza que
                ofrecemos al depositarnos el vehículo en nuestras instalaciones, hemos hecho al paso de los años un lavadero de referencia y confianza
            </p>
          </div>
        </div>
      </section>
      <!--Section: Content-->

      <hr class="my-5" />

      <!--Section: Content-->
      <section class="text-center">
        <h4 class="mb-5"><strong>Facilis consequatur eligendi</strong></h4>

        <div class="row">
          <div class="col-lg-4 col-md-12 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="https://mdbootstrap.com/img/new/standard/nature/184.jpg" class="img-fluid" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">
                  Some quick example text to build on the card title and make
                  up the bulk of the card's content.
                </p>
                <a href="#!" class="btn btn-primary">Button</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="https://mdbootstrap.com/img/new/standard/nature/023.jpg" class="img-fluid" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">
                  Some quick example text to build on the card title and make
                  up the bulk of the card's content.
                </p>
                <a href="#!" class="btn btn-primary">Button</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="https://mdbootstrap.com/img/new/standard/nature/111.jpg" class="img-fluid" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">
                  Some quick example text to build on the card title and make
                  up the bulk of the card's content.
                </p>
                <a href="#!" class="btn btn-primary">Button</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--Section: Content-->

    </div>
  </main>
  <!--Main layout-->

@endsection
