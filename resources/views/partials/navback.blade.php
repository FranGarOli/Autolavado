<!-- Navbar -->
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-black fixed-top">
    <div class="container-fluid">
        <!-- Navbar brand -->
        <a class="navbar-brand mt-2 mt-lg-0" href="{{ route('index') }}">
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
                    <a class="nav-link" aria-current="page" href="{{ route('registers.index') }}">INICIO</a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" aria-current="page" href="{{ route('registers.create') }}">CREAR REGISTRO</a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" aria-current="page" href="{{ route('services.create') }}">CREAR SERVICIO</a>
                </li>
            </ul>



            <ul class="navbar-nav ms-auto d-lg-flex flex-row gap-3">


                <form class="input-group align-items-center" action="{{ route('client.search') }}">
                    <div class="input-group">
                        <input type="text" class="p-1" name="nameSearch" id="nameSearch" list="nameList"
                            placeholder="Buscar cliente...">
                        <datalist id="nameList">
                            <!--Option generado en js saca nombres"-->
                        </datalist>
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </form>

                <!-- Icons -->
                <li class="nav-item me-3 me-lg-0">
                    <a class="nav-link" style="color: #4FAAE2" href="https://www.youtube.com/@autolavadogarcia5765"
                        rel="nofollow" target="_blank">
                        <i class="fab fa-youtube"></i>
                    </a>
                </li>
                <li class="nav-item me-3 me-lg-0">
                    <a class="nav-link" style="color: #4FAAE2" href="https://www.facebook.com/autolavadogarciavalencia/"
                        rel="nofollow" target="_blank">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </li>
                <li class="nav-item me-3 me-lg-0">
                    <a class="nav-link" style="color: #4FAAE2" href="https://www.instagram.com/autolavadojg/"
                        rel="nofollow" target="_blank">
                        <i class="fab fa-instagram"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Navbar -->
