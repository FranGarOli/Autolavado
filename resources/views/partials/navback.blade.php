<!-- Navbar -->
<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark d-none d-lg-block mb-5">
    <div class="container-fluid">
        <!-- Navbar brand -->
        <a class="navbar-brand mt-2 mt-lg-0" href="{{ route('registers.index') }}">
            <img src="https://i.postimg.cc/vTwfMJn7/image.png" height="15" alt="Autolavado Logo" loading="lazy" />
        </a>

        <div class="collapse navbar-collapse" id="navbarExample01">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item active">
                    <a class="nav-link" aria-current="page" href="{{ route('registers.index') }}">INICIO</a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" aria-current="page" href="{{ route('registers.create') }}">CREAR REGISTRO</a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" aria-current="page" href="{{ route('services.create') }}">CREAR SERVICIO</a>
                </li>

                <li class="nav-item active">
                    {{-- <a class="nav-link" aria-current="page" href="{{ route('services.create') }}">MODIFICAR CLIENTE</a> --}}
                </li>
            </ul>



            <ul class="navbar-nav d-flex flex-row">


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
