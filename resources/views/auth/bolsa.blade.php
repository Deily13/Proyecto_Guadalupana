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
                <input type="text" id="searchBar" class="barraBusqueda" placeholder="Buscar..." style="display: none;">
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
            @forelse ($productos as $producto)
            <div class="Producto" data-producto-id="{{ $producto->id }}">
                <div class="img">
                    <!-- Asegúrate de que la propiedad 'image' exista en tu modelo Bolsa -->
                    <img src="{{ $producto->product->image }}" alt="{{ $producto->product->nombre }}">
                </div>
                <div class="Descripcion">
                    <div class="Texto">
                        <h3>{{ $producto->product->nombre }}</h3>
                        <p>{{ $producto->product->Descripción }}</p><br>
                        @if ($producto->sabor !== null)
                        <p>Sabor: {{ $producto->sabor }}</p>
                        @endif
                        <br>
                        <p>Cantidad: {{ $producto->cantidad }}</p><br>
                    </div>

                    <h2> ${{ number_format($producto->product->precio * $producto->cantidad, 2, ',', '.') }}</h2>
                    <h2>{{ $producto->product->precio_total }}</h2>

                    <form action="{{ route('borrar.producto', $producto->id) }}" method="POST">
                        @csrf
                        <button type="submit" class="Eliminar"></button>
                    </form>
                </div>

    
                   
            

            </div>
            @empty
            <div class="BolsaVacia">
            Tu bolsa esta vacia
            </div>
            @endforelse
        </div>
        <div class="Total"> Total a pagar
            <div class="Precio"><strong>${{ number_format($total, 2, ',', '.') }}</strong></div>
        </div>
        <form action="{{ route('enviar.correo') }}" method="POST">
            @csrf
            <input type="hidden" name="total" value="{{ $total }}">
            <button class="BotonPagar" type="submit" >Pagar</button>
        </form>
    </div>

    <script src="{{ asset('asset/js/bolsa.js') }}"></script>
</body>

</html>