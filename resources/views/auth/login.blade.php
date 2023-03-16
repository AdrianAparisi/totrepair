<x-guest-layout>
    <div class="container-form sign-in">
        <form method="POST" id="formulario" class="formulario" action="{{ route('login') }}">
            @csrf
            <h2 class="create-account">Iniciar Sesión</h2>
            <div class="iconos">
                <div class="border-icon">
                    <i class='bx bxl-instagram'></i>
                </div>
                <div class="border-icon">
                    <i class='bx bxl-linkedin'></i>
                </div>
                <div class="border-icon">
                    <i class='bx bxl-facebook-circle'></i>
                </div>
            </div>

            <label for="emailUsu">Email</label>
            <input type="email" class=" formInput {{ $errors->has('email') ? 'is-invalid' : '' }}" name="email"
                id="emailUsu" type="email" value="{{ old('email') }}" required autofocus autocomplete="email"
                placeholder="Introduzca su email" />
            <x-jet-input-error for="email"></x-jet-input-error>

            <label for="passwordUsu">Contraseña</label>
            <input id="passwordUsu" type="password" name="password"
                class=" formInput {{ $errors->has('password') ? ' is-invalid' : '' }}" required
                placeholder="Introduzca su contraseña" />
            <x-jet-input-error for="password"></x-jet-input-error>

            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}" class="link-forgot"> ¿No recuerdas tu contraseña?</a>
            @endif

            <input type="submit" name="login" id="submit" value="{{ __('Iniciar Sesión') }}" />

        </form>
        <div class="welcome-back">
            <div class="message">
                <div>
                    <a class="link-home" href="{{ route('inicio') }}"><span class="fas fa-home"></span></a>
                </div>
                <h2>¿Aún no tienes una cuenta?</h2>
                <p>Si todavia no dispone de cuenta, por favor registrese aquí.</p>
                <a href="{{ route('register') }}" class="sign-in-btn">Registrarse</a>
            </div>
        </div>
    </div>
</x-guest-layout>
