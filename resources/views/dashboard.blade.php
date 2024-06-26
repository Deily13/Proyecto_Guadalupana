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
                        <button type="submit">Cerrar Sesion</button>
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
                <img src="{{ asset('/img/Productos/vinos.jpeg') }}" alt="Vinos" class="imagen">
            </div>
        </a>
        <a class="Cuadro" href="/hamburguesas">
            <h4>Hamburguesas</h4>
            <div class="Productos">
                <img src="{{ asset('/img/Productos/hamburguesas.jpg') }}" alt="hamburguesas" class="imagen">
            </div>
        </a>
        <a class="Cuadro" href="/heladeria">
            <h4>Helados</h4>
            <div class="Productos">
                <img src="{{ asset('/img/Productos/helado.jpeg') }}" alt="helados" class="imagen">
            </div>
        </a>
        <a class="Cuadro" href="/comidas-rapidas">
            <h4>Comidas Rapidas</h4>
            <div class="Productos">
                <img src="{{ asset('/img/Productos/comidas rapidas.jpeg') }}" alt="comidas-rapidas" class="imagen">
            </div>
        </a>
        <a class="Cuadro" href="/bebidas">
            <h4>Refrescos</h4>
            <div class="Productos">
                <img src="{{ asset('/img/Productos/bebidas.jpeg') }}" alt="bebidas" class="imagen">
            </div>
        </a>
        <a class="Cuadro" href="/combos">
            <h4>Combos</h4>
            <div class="Productos">
                <img src="{{ asset('/img/Productos/infantil.jpeg') }}" alt="combos" class="imagen">
            </div>
        </a>
    </div>
    <div class="footer">
        <div class="Titulo_f"> Redes Sociales</div>
        <div class="Social">
            <a href="https://api.whatsapp.com/send?phone=3134774134" target="_blank" rel="noopener noreferrer">
                <div class="Red Red-whatsaap"></div>
            </a>
            <a href="https://www.instagram.com/laguadalupana.ulloa?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank" rel="noopener noreferrer">
                <div class="Red Red-instagram"></div>
            </a>
            <a href="https://web.facebook.com/people/La-Guadalupana-Ulloa/100088166905257/?_rdc=1&_rdr">
                <div class="Red Red-facebook"></div><a>
                    <div class="Red Red-email"></div>
        </div>
        <div class="Info">
            <p>Ubicación: Via Principal - Ulloa - Rivera - Huila</p>
            <p>Dirección: Carrera 2 # 14-29    Ulloa, Rivera</p>
            <p>Teléfono: 3134774134</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis auctor turpis nec velit pretium, nec
                molestie mi sodales. Integer et magna quis arcu interdum malesuada.</p>
        </div>
    </div>

    <script src="{{ asset('asset/js/home.js') }}"></script>
</body>

</html>