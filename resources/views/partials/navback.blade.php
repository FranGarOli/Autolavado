<!-- Navbar -->
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark d-none d-lg-block mb-5">
    <div class="container-fluid">
      <!-- Navbar brand -->
      <a class="navbar-brand mt-2 mt-lg-0" href="{{route('index')}}">
          <img
          src="https://i.postimg.cc/vTwfMJn7/image.png"
          height="15"
          alt="Autolavado Logo"
          loading="lazy"
          />
      </a>

      <div class="collapse navbar-collapse" id="navbarExample01">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

          <li class="nav-item active">
            <a class="nav-link" aria-current="page" href="{{route('registers.index')}}">INICIO</a>
          </li>

          <li class="nav-item active">
            <a class="nav-link" aria-current="page" href="{{route('registers.create')}}">CREAR REGISTRO</a>
          </li>

          <li class="nav-item active">
            <a class="nav-link" aria-current="page" href="{{route('services.create')}}">CREAR SERVICIO</a>
          </li>
        </ul>

        <form class="d-flex input-group w-auto" action="{{route('clients.show', ['client' => $client])}}">
          <input
            type="search"
            class="form-control rounded"
            placeholder="Buscar cliente"
            aria-label="Buscar cliente"
            aria-describedby="search-addon"
          />
          <input class="input-group-text border-0 fas fa-search" id="search-addon" type="submit">
        </form>

        <ul class="navbar-nav d-flex flex-row">
          <!-- Icons -->
          <li class="nav-item me-3 me-lg-0">
            <a class="nav-link" style="color: #4FAAE2" href="https://www.youtube.com/@autolavadogarcia5765" rel="nofollow"
              target="_blank">
              <i class="fab fa-youtube"></i>
            </a>
          </li>
          <li class="nav-item me-3 me-lg-0">
            <a class="nav-link" style="color: #4FAAE2" href="https://www.facebook.com/autolavadogarciavalencia/" rel="nofollow" target="_blank">
              <i class="fab fa-facebook-f"></i>
            </a>
          </li>
          <li class="nav-item me-3 me-lg-0">
            <a class="nav-link" style="color: #4FAAE2" href="https://www.instagram.com/autolavadojg/" rel="nofollow" target="_blank">
              <i class="fab fa-instagram"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Navbar -->
