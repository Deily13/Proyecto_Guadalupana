<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('asset/bolsa.css') }}" rel="stylesheet">
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
            <a>
                <div class="boton_toolbar1" onclick="toggleSearchBar()"></div>
                <input type="text" id="searchBar" class="barraBusqueda" placeholder="Buscar..."
                    style="display: none;">
            </a>
            <a href="/">
                <div class="boton_toolbar2"></div>
            </a>
            <a href="/bolsa">
                <div class="boton_toolbar4"></div>
            </a>
            <div class="boton_iniciar">
                <!--nombre de usuario registrado (perfil)  -->
                @if (Auth::check())
                    <div class="usuario">{{ Auth::user()->name }}</div>
                    <div class="boton_cerrar">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit">Cerrar Sesión</button>
                        </form>
                    </div>
                @else
                    <a href="{{ route('login') }}">
                        <div class="boton_iniciar">
                            Iniciar Sesión
                        </div>
                    </a>
                @endif
            </div>
        </div>
    </div>

    <div class="Titulo">Bolsa</div>
    <div class="ContainerBolsa">
        <div class="ContainerProductos">
            @foreach ($productos as $producto)
                <div class="Producto" data-producto-id="{{ $producto->id }}">
                    <div class="img"></div>
                    <div class="Descripcion">
                        <div class="Texto">
                            <h3>{{ $producto->nombre }}</h3><br>
                            <p>{{ $producto->descripcion }}</p><br>
                            <p>Cantidad:</p>
                        </div>
                        <h2>{{ $producto->precio }}</h2>
                        <div class="Eliminar" onclick="eliminarProductoDOM(this)" data-producto-id="{{ $producto->id }}"></div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="Total"> Total a pagar
            <div class="Precio">{{ $total }}</div>
        </div>
        <form action="{{ route('clear_cart') }}" method="POST">
            @csrf
            <button type="submit" class="BotonPagar">Pagar</button>
        </form>
    </div>

    <script src="{{ asset('asset/js/bolsa.js') }}"></script>
</body>

</html>
