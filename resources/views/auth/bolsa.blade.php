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
                <a href="{{ route('login')}}">Iniciar Sesión</a>
            </div>
        </div>
    </div>

    <div class="Titulo">Bolsa</div>
    <div class="ContainerBolsa">
        <div class="ContainerProductos">
            <div class="Producto" data-producto-id="1">
                <div class="img"></div>
                <div class="Descripcion">
                    <div class="Texto">
                        <h3>Producto</h3><br>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis auctor turpis nec velit pretium, nec
                            molestie mi
                            sodales.
                        </p><br>
                        <p>Cantidad:</p>
                    </div>
                    <h2>$$$</h2>
                    <div class="Eliminar" onclick="eliminarProducto(this)"></div>
                </div>
            </div>
            <div class="Producto">
                <div class="img"></div>
                <div class="Descripcion">
                    <div class="Texto">
                        <h3>Producto</h3><br>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis auctor turpis nec velit pretium, nec
                            molestie mi
                            sodales.
                        </p><br>
                        <p>Cantidad:</p>
                    </div>
                    <h2>$$$</h2>
                    <div class="Eliminar"></div>
                </div>
            </div>


        </div>
        <div class="Total"> Total a pagar
            <div class="Precio">$$$$$$</div>
        </div>
        <button class="BotonPagar">Pagar</button>
    </div>


    <script src="{{ asset('asset/js/bolsa.js') }}"></script>
</body>

</html>
