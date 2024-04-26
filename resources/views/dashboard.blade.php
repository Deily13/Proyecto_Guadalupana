<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('asset/home.css') }}" rel="stylesheet">
    <link rel="icon" href="{{ asset('img/Icon/logo.png') }}" type="image/x-icon">
    <title>Document</title>
</head>

<body>
    <div class="toolbar">
        <div class="menu" onclick="toggleDropdown()">
            <div class="dropdown" id="dropdownMenu" style="display: none;">
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
            <a href="/dashboard">
                <div class="boton_toolbar2"></div>
            </a>
            <a href="/bolsa">
                <div class="boton_toolbar3"></div>
            </a>
            <a>
                <div class="boton_toolbar4"></div>
            </a>

            <!--nombre de usuario registrado (perfil)  -->
            <a>
                <div class="usuario">usuario</div>
            </a>

        </div>
    </div>
    <div class="toolbar_img">
        <img src="{{ asset('/img/Icon/Logo.png') }}" alt="Logo" class="logo">
    </div>

    <div class="Container_Producto">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Stardos+Stencil&display=swap" rel="stylesheet">
        <a class="Cuadro" href="/bebidas-alcoholicas">
            <h4>Bebidas Alcoholicas</h4>
            <div class="Productos">
                <img src="{{ asset('/img/Productos/vinos.jpg') }}" alt="Vinos" class="imagen">
            </div>
        </a>
        <a class="Cuadro" href="/hamburguesas">
            <h4>Hamburguesas</h4>
            <div class="Productos">
                <img src="{{ asset('/img/Productos/hamburguesa.jpg') }}" alt="hamburguesas" class="imagen">
            </div>
        </a>
        <a class="Cuadro" href="/heladeria">
            <h4>Helados</h4>
            <div class="Productos">
                <img src="{{ asset('/img/Productos/helado.jpg') }}" alt="helados" class="imagen">
            </div>
        </a>
        <a class="Cuadro" href="/comidas-rapidas">
            <h4>Comidas Rapidas</h4>
            <div class="Productos">
                <img src="{{ asset('/img/Productos/comidas rapidas.jpg') }}" alt="comidas-rapidas" class="imagen">
            </div>
        </a>
        <a class="Cuadro" href="/bebidas">
            <h4>Bebidas</h4>
            <div class="Productos">
                <img src="{{ asset('/img/Productos/bebidas.jpg') }}" alt="bebidas" class="imagen">
            </div>
        </a>
        <a class="Cuadro" href="/combos">
            <h4>Combos</h4>
            <div class="Productos">
                <img src="{{ asset('/img/Productos/infantil.jpg') }}" alt="combos" class="imagen">
            </div>
        </a>
    </div>
    <div class="footer">
        <div class="Titulo_f"> Redes Sociales</div>
        <div class="Social">
            <div class="Red"></div>
            <div class="Red"></div>
            <div class="Red"></div>
            <div class="Red"></div>
        </div>
        <div class="Info">
            <p>Ubicación: Av. Ejemplo, Ciudad Ejemplo</p>
            <p>Dirección: Calle Ejemplo #123</p>
            <p>Teléfono: +123456789</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis auctor turpis nec velit pretium, nec
                molestie mi sodales. Integer et magna quis arcu interdum malesuada.</p>
        </div>
    </div>

    <script src="{{ asset('asset/js/home.js') }}"></script>
</body>

</html>
