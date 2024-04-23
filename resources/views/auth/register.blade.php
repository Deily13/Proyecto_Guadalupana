<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('asset/register.css') }}" rel="stylesheet">
  <title>Document</title>
</head>

<body>

  <form method="POST" action="{{ route('register') }}" class="formulario__register">
    @csrf

    <h2>Registrarse</h2>

    <div class="mt-4">
      <x-input-label for="name" :value="__('Nombre de usuario')" />
      <x-text-input id="name" type="text" name="name" :value="old('name')" required autofocus />
      <x-input-error :messages="$errors->get('name')" class="mt-2" />
    </div>

    <div class="mt-4">
      <x-input-label for="email" :value="__('Correo Electrónico')" />
      <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
      <x-input-error :messages="$errors->get('email')" class="mt-2" />
    </div>

    <div class="mt-4">
      <x-input-label for="password" :value="__('Contraseña')" />
      <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required />
      <x-input-error :messages="$errors->get('password')" class="mt-2" />
    </div>

    <div class="mt-4">
      <x-input-label for="password_confirmation" :value="__('Confirmar Contraseña')" />
      <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required />
      <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
    </div>

    <div class="mt-4">
      <x-input-label for="first_name" :value="__('Nombre')" />
      <x-text-input id="first_name" class="block mt-1 w-full" type="text" name="first_name" :value="old('first_name')" />
    </div>

    <div class="mt-4">
      <x-input-label for="last_name" :value="__('Apellidos')" />
      <x-text-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name')" />
    </div>

    <div class="mt-4">
      <x-input-label for="idtype" :value="__('Tipo de Identificación')" />
      <select id="idtype" name="identification_type">
        <option value="">Tipo de Identificación*</option>
        <option value="cc">Cédula de Ciudadanía</option>
        <option value="ce">Cédula de Extranjería</option>
        <option value="ti">Tarjeta de Identidad</option>
      </select>
    </div>

    <div class="mt-4">
      <x-input-label for="identification_number" :value="__('N. Identificación')" />
      <x-text-input id="identification_number" class="block mt-1 w-full" type="text" name="identification_number" :value="old('identification_number')" />
    </div>

    <div class="mt-4">
      <x-input-label for="phone_number" :value="__('N. Celular')" />
      <x-text-input id="phone_number" class="block mt-1 w-full" type="number" name="phone_number" :value="old('phone_number')" />
    </div>

    <div class="mt-4">
      <x-input-label for="address" :value="__('Dirección')" />
      <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" />
    </div>

    <div class="Container-Boton">
      <button type="submit" id="botonPedir">Registrar</button>
    </div>
  </form>


</body>

<<<<<<< HEAD
</html>
=======
</html>
>>>>>>> c39d68f1287b61a8d01058ce949e4211f983e026
