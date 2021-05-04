<nav class="navbar navbar-expand-lg navbar-light transparent pt-4 d-flex justify-content-between">
    <a href="#" class="" id="menu-toggle"><span class="navbar-toggler-icon"></span></a>

    <div class="nav-item dropdown">
        {{-- <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown
        </a> --}}
        <a href="#" class="text-decoration-none" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="user-menu d-flex text-right">
                <div class="user-name text-end mr-3">
                    <h5 class="mb-0 text-secondary text-capitalize font-weight-bold">{{ Auth::user()->name }}</h5>
                    <p class="mb-0 text-sm text-black-50">{{ (count(Auth::user()->roles) > 0 ) ? Auth::user()->roles[0]->name : 'Sin rol' }}</p>
                </div>
                <div class="user-img d-flex align-items-center">
                    <div class="avatar">
                        <img src="{{ asset('images/admin.svg') }}" height="44">
                    </div>
                </div>
            </div>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#"><i class="fas fa-user"></i> Mi perfil</a>
            <a class="dropdown-item" href="#"><i class="fas fa-cog"></i> Configuración</a>
        <div class="dropdown-divider"></div>
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="dropdown-item text-decoration-none text-danger"><i class="fas fa-sign-out-alt"></i> Cerrar Sesión</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
    </div>

    </div>
</nav>
