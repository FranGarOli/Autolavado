<!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light d-none d-lg-block mb-5">
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
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">

            <li class="nav-item active">
              <a class="nav-link" aria-current="page" href="{{route('index')}}">INICIO</a>
            </li>

            <!-- Dropdown -->
            <li class="nav-item dropdown">
                <a
                class="nav-link dropdown-toggle"
                id="navbarDropdownMenuLink"
                role="button"
                data-mdb-toggle="dropdown"
                aria-expanded="false"
                >
                SERVICIOS
                </a>

                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li>
                        <a class="dropdown-item" href="#">Limpieza de tapiceria</a>
                    </li>

                    <li>
                        <a class="dropdown-item" href="#">Limpieza interior</a>
                    </li>

                    <li>
                        <a class="dropdown-item" href="#">Limpieza exterior</a>
                    </li>

                    <li>
                        <a class="dropdown-item" href="#">Limpiezas de motor</a>
                    </li>

                    <li>
                        <a class="dropdown-item" href="#">Limpieza completa</a>
                    </li>

                    <li>
                        <a class="dropdown-item" href="#">Pulidas</a>
                    </li>

                    <li>
                        <a class="dropdown-item" href="#">Desinfecciones</a>
                    </li>

                    <li>
                        <a class="dropdown-item" href="#">Productos</a>
                    </li>

                    <li>
                        <a class="dropdown-item" href="#">Ofertas</a>
                    </li>
                </ul>

            </li>

            <li class="nav-item">
              <a class="nav-link" href="{{route('contact')}}" rel="nofollow">DÓNDE ESTAMOS</a>
            </li>

          </ul>

          <!--BUSCADOR INACTIVO (IMPLEMENTAR NAVBACK)-->
          {{-- <form class="d-flex input-group w-auto">
            <input
              type="search"
              class="form-control rounded"
              placeholder="Search"
              aria-label="Search"
              aria-describedby="search-addon"
            />
            <span class="input-group-text border-0" id="search-addon">
              <i class="fas fa-search"></i>
            </span>
          </form> --}}

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
