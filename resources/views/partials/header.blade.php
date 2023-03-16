<header>
    <a href="{{ route('inicio') }}" class="logo"><img src="{{ asset('img/logo.png') }}" alt="Logo de ToTRepair"></a>

    <ul class="navbar">
        <li><a href="{{ route('inicio') }}" class="active">Inicio</a></li>
        <li><a href="#">Repuestos</a></li>
        <li><a href="#">Accesorios</a></li>
        <li><a href="#">Móviles</a></li>
    </ul>

    <div class="EnlaceR">
        @if (Route::has('login'))
            @auth
                <a href="{{ route('profile.show') }}">{{ Auth::user()->name }}</a>
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><span
                        class="fas fa-sign-out-alt fa-lg" aria-label="icono de salir"></span></a>

                <a href="{{ route('inicio') }}" class="fas fa-shopping-cart fa-lg" aria-label="icono de carrito"></a>
                <form method="POST" id="logout-form" action="{{ route('logout') }}">
                    @csrf
                </form>
            @else
                <a href="{{ route('login') }}">Iniciar</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Registrarse</a>
                @endif
            @endif
            @endif
        </div>

        <div class="main">
            <div class="bx bx-menu" id="menu-icon"></div>
        </div>

    </header>
