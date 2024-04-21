<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y Register - Guadalupana</title>

    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="{{ asset('asset/login.css') }}" rel="stylesheet">
</head>
<body>

<main>
    <div class="contenedor__todo">
        <div class="caja__trasera">
            <div class="caja__trasera-login">
                <h3>¿Ya tienes una cuenta?</h3>
                <p>Inicia sesión para entrar en la página</p>
                <a href="{{ route('login') }}"><button id="btn__iniciar-sesion">Iniciar Sesión</button></a>
            </div>
            <div class="caja__trasera-register">
                <h3>¿Aún no tienes una cuenta?</h3>
                <p>Regístrate para que puedas iniciar sesión</p>
                <a href="{{ route('register') }}"><button id="btn__registrarse">Regístrarse</button></a>
            </div>
        </div>

        <div class="contenedor__login-register">
            <form action="{{ route('login') }}" method="POST" class="formulario__login">
                @csrf
                <h2>Iniciar Sesión</h2>
                <div data-mdb-input-init class="form-outline mb-4">
                    <x-input-label for="email" :value="__('email')" />
                    <input type="email" class="form-control" id="email" name="email" placeholder="Correo Electrónico" required autofocus autocomplete="username">
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                <div data-mdb-input-init class="form-outline mb-4">
                    <x-input-label for="password" :value="__('Password')" />
                    <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña" required autocomplete="current-password">
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
                <button type="submit" class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3">{{ __('Iniciar sesión') }}</button>
            </form>
        </div>
    </div>
</main>

<script src="{{ asset('asset/js/script.js') }}"></script>
</body>
</html>
