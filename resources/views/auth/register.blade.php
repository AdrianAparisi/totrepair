<x-guest-layout>
    {{--  <x-jet-validation-errors class="mb-3" /> --}}
    <div class="container-form sign-up">
        <div class="welcome-back">
            <div class="welcome-back">
                <div class="message">
                    <div>
                        <a class="link-home" href="{{ route('inicio') }}"><span class="fas fa-home"></span></a>
                    </div>
                    <h2>¿Aún no tienes una cuenta?</h2>
                    <p>Si todavia no dispone de cuenta, por favor registrese aquí.</p>
                    <a href="{{ route('login') }}" class="sign-in-btn">Iniciar Sesión</a>
                </div>
            </div>
        </div>


        <form method="POST" id="formulario" class="formulario" action="{{ route('register') }}">
            @csrf
            <h2 class="create-account">Crear una cuenta</h2>
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


            <label for="name">Nombre</label>

            <input type="text" class=" formInput {{ $errors->has('name') ? 'is-invalid' : '' }}" name="name"
                id="name" placeholder="Introduzca su nombre" value="{{ old('name') }}" required autofocus
                autocomplete="name" />
            <x-jet-input-error for="name"></x-jet-input-error>


            <label for="email">Email</label>

            <input type="email" class=" formInput {{ $errors->has('email') ? 'is-invalid' : '' }}" name="email"
                id="email" placeholder="Introduzca el email" value="{{ old('email') }}" required />
            <x-jet-input-error for="email"></x-jet-input-error>


            <label for="password">Contraseña</label>

            <input type="password" class=" formInput {{ $errors->has('password') ? 'is-invalid' : '' }}" name="password"
                id="password" placeholder="Introduzca la contraseña" required autocomplete="new-password" />
            <x-jet-input-error for="password"></x-jet-input-error>


            <label for="password_confirmation">Confirmar la Contraseña</label>
            <input type="password" required class="formInput" name="password_confirmation" id="password_confirmation"
                placeholder="Repita la contraseña"
                value="{{ old('password_confirmation') ? old('password_confirmation') : '' }}">
            <p id="password_confirmation_p">
                @error('password_confirmation')
                    {{ $message }}
                @enderror
            </p>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div>
                    <div class="miCheck">
                        <x-jet-checkbox id="terms" name="terms" required />
                        <label class="custom-control-label" for="terms">
                            {!! __('He leído los :terms_of_service y :privacy_policy', [
                                'terms_of_service' => '<a target="_blank" href="' . route('terms.show') . '">' . __('Terminos') . '</a>',
                                'privacy_policy' => '<a target="_blank" href="' . route('policy.show') . '">' . __('Condiciones') . '</a>',
                            ]) !!}
                        </label>
                    </div>
                </div>
            @endif

            <input type="submit" name="register" id="submit" value="{{ __('Registrarse') }}" />
        </form>
    </div>
</x-guest-layout>
