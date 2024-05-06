<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('asset/Productos.css') }}" rel="stylesheet">
    <link rel="icon" href="{{ asset('img/Icon/logo.png') }}" type="image/x-icon">
    <title>My Website</title>
</head>

<body>

    <div class="toolbar">
        <div class="menu" onclick="toggleDropdown()">
            <div class="dropdown" id="dropdownMenu" style="display: none;">
                <!-- Elementos del menú -->
                <a href="/bebidas-alcoholicas">Bebidas Alcoholicas</a>
                <a href="/hamburguesas">Hamburguesas</a>
                <a href="/heladeria">Heladeria</a>
                <a href="/comidas-rapidas">Comidas Rapidas</a>
                <a href="/bebidas">Bebidas</a>
                <a href="/combos">Combos</a>
            </div>
        </div>

        <div class="botonera">
            <a href="/dashboard">
                <div class="boton_toolbar2"></div>
            </a>
            <a href="/bolsa">
                <div class="boton_toolbar3"></div>
            </a>
            <a href="/informacion">
                <div class="boton_toolbar4"></div>
            </a>

            <!--nombre de usuario registrado (perfil)  -->
            @if (Auth::check())
            <div class="usuario" onclick="desplegable()">
                {{ Auth::user()->name }}
                <div class="desplegable" id="desplegableoption" style="display: none;">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button id="buttonc" type="submit">Cerrar Sesion</button>
                    </form>
                </div>
            </div>
            @else
            <div class="boton_iniciar">
                <a href="{{ route('login') }}">Iniciar Sesión</a>
            </div>
            @endif

        </div>
    </div>

    <div class="Titulo">Comidas Rapidas</div>

    <div class="ContainerProductos">
        @foreach ($comidas as $comida)
        <div class="Cuadro">
            <div class="img">
                <img src="{{ $comida->image }}" alt="Descripción de la imagen">
            </div>
            <div class="Detalle">
                <h1>{{ $comida->nombre }}</h1>
                <p>{{ $comida->Descripción }}</p>
                <p>Precio: {{ $comida->precio }}</p>
                <p>Disponibles: {{ $comida->Stock }}</p>
                <div class="botones">
                    <form action="{{ route('procesar.pedido') }}" method="POST">
                        @csrf <!-- Agrega esto si estás utilizando Blade para evitar el error CSRF -->
                        <div class="botones">
                            <label for="cantidad">
                                <h5>Cantidad</h5>
                            </label>
                            <input type="number" id="cantidad" name="cantidad" min="1" value="1">
                        </div>
                        <input type="hidden" name="producto_id" value="{{ $comida->id }}">
                        <button id="botonPedir1" type="submit" onclick="cambiarTexto(this)">Pedir</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <script src="{{ asset('asset/js/Productos.js') }}"></script>
</body>

</html>