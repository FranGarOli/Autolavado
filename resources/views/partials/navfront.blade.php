<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container-fluid">
        <!-- Navbar brand -->
        <a class="navbar-brand d-flex" href="{{ route('index') }}">
            <img src="https://i.postimg.cc/fRRZSPkw/image-removebg-preview-1.png" height="15" alt="Autolavado Logo"
                loading="lazy" />
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation" style="color: #4FAAE2">
            <i
                class="navbar-toggler-icon fas fa-bars me-3 text-secondary d-flex justify-content-center align-items-center"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-lg-flex">
                <li class="nav-item active">
                    <a class="nav-link" aria-current="page" href="{{ route('index') }}">INICIO</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        SERVICIOS
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li>
                            <a class="dropdown-item" href="{{ route('tapicerias') }}">Limpieza de tapiceria</a>
                        </li>

                        <li>
                            <a class="dropdown-item" href="{{ route('interior') }}">Limpieza interior</a>
                        </li>

                        <li>
                            <a class="dropdown-item" href="{{ route('exterior') }}">Limpieza exterior</a>
                        </li>

                        <li>
                            <a class="dropdown-item" href="{{ route('motor') }}">Limpiezas de motor</a>
                        </li>

                        <li>
                            <a class="dropdown-item" href="{{ route('completas') }}">Limpieza completa</a>
                        </li>

                        <li>
                            <a class="dropdown-item" href="{{ route('pulidas') }}">Pulidas</a>
                        </li>

                        <li>
                            <a class="dropdown-item" href="{{ route('desinfecciones') }}">Desinfecciones</a>
                        </li>

                        <li>
                            <a class="dropdown-item" href="{{ route('productos') }}">Productos</a>
                        </li>

                        <li>
                            <a class="dropdown-item" href="{{ route('ofertas') }}">Ofertas</a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact') }}" rel="nofollow">DÓNDE ESTAMOS</a>
                </li>
            </ul>

            <ul class="navbar-nav ms-auto d-none d-lg-flex flex-row">
                <!-- Iconos -->
                <li class="nav-item me-3">
                    <a class="nav-link" style="color: #4FAAE2" href="https://www.youtube.com/@autolavadogarcia5765"
                        rel="nofollow" target="_blank">
                        <i class="fab fa-youtube"></i>
                    </a>
                </li>
                <li class="nav-item me-3">
                    <a class="nav-link" style="color: #4FAAE2" href="https://www.facebook.com/autolavadogarciavalencia/"
                        rel="nofollow" target="_blank">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </li>
                <li class="nav-item me-3">
                    <a class="nav-link" style="color: #4FAAE2" href="https://www.instagram.com/autolavadojg/"
                        rel="nofollow" target="_blank">
                        <i class="fab fa-instagram"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>

</nav>
