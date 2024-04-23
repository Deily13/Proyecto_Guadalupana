<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
    <link href="{{ asset('asset/home.css') }}" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <div class="toolbar">
<<<<<<<< HEAD:resources/views/welcome.blade.php
    <div class="menu">
        <button class="menu-button" onclick="toggleDropdown()"></button>
=======
    <link href="{{ asset('asset/home-registre.css') }}" rel="stylesheet">
    <title>Document</title> 
</head>

<body>
<<<<<<<< HEAD:resources/views/dashboard.blade.php
<div class="toolbar">
        <div class="menu">
        <button class="menu-button" onclick="toggleDropdown()"></button>
========
    <div class="toolbar">
    <div class="menu"  onclick="toggleDropdown()">
>>>>>>>> c39d68f1287b61a8d01058ce949e4211f983e026:resources/views/welcome.blade.php
>>>>>>> c39d68f1287b61a8d01058ce949e4211f983e026
    <div class="dropdown" id="dropdownMenu" style="display: none;">
        <!-- Elementos del menú -->
        <a href="/bebidas-alcoholicas">Bebidas Alcoholicas</a>
        <a href="/hamburguesas">Hamburguesas</a>
        <a href="/heladeria">Heladeria</a>
        <a href="/comidas-rapidas">Comidas Rapidas</a>
        <a href="/bebidas">Bebidas</a>
        <a href="/combos">Combos</a>
    </div>
<<<<<<< HEAD
========
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
>>>>>>>> c39d68f1287b61a8d01058ce949e4211f983e026:resources/views/dashboard.blade.php
        </div>

=======
        </div>
<<<<<<<< HEAD:resources/views/dashboard.blade.php
        
========

>>>>>>>> c39d68f1287b61a8d01058ce949e4211f983e026:resources/views/welcome.blade.php
>>>>>>> c39d68f1287b61a8d01058ce949e4211f983e026
        <div class="botonera">
            <a href="/">
                <div class="boton_toolbar1"></div>
               <!--  <input type="text" id="barraBusqueda" class="barraBusqueda" placeholder="Buscar..."> -->
            </a>
<<<<<<< HEAD
            <a href="/dashboard">
                <div class="boton_toolbar2"></div>
            </a>
            <a href="/bolsa">
                <div class="boton_toolbar3"></div>
=======
<<<<<<<< HEAD:resources/views/dashboard.blade.php
            <a href="/dashboard">
========
            <a href="/admin">
>>>>>>>> c39d68f1287b61a8d01058ce949e4211f983e026:resources/views/welcome.blade.php
                <div class="boton_toolbar2"></div>
            </a>
            <a href="/bolsa">
                <div class="boton_toolbar4"></div>
>>>>>>> c39d68f1287b61a8d01058ce949e4211f983e026
            </a>
            <a href="/lista-pedidos">
                <div class="boton_toolbar4"></div>
            </a>

            <!--nombre de usuario registrado (perfil)  -->
            <a>
                <div class="usuario">usuario</div>
            </a>
<<<<<<< HEAD

=======
            
>>>>>>> c39d68f1287b61a8d01058ce949e4211f983e026
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
<<<<<<< HEAD
        <a class="Cuadro" href="/bebidas">
=======
<<<<<<<< HEAD:resources/views/dashboard.blade.php
        <a class="Cuadro" href="/bebidas" >
========
        <a class="Cuadro" href="/bebidas">
>>>>>>>> c39d68f1287b61a8d01058ce949e4211f983e026:resources/views/welcome.blade.php
>>>>>>> c39d68f1287b61a8d01058ce949e4211f983e026
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

<<<<<<< HEAD
<<<<<<<< HEAD:resources/views/welcome.blade.php

    <script src="{{ asset('asset/js/home.js') }}"></script>
========
    <script src="{{ asset('asset/js/home-registre.js') }}"></script>
>>>>>>>> c39d68f1287b61a8d01058ce949e4211f983e026:resources/views/dashboard.blade.php
</body>

</html>
=======
<<<<<<<< HEAD:resources/views/dashboard.blade.php
    <script src="{{ asset('asset/js/home-registre.js') }}"></script>
</body>
========

    <script src="{{ asset('asset/js/home.js') }}"></script>
</body>

>>>>>>>> c39d68f1287b61a8d01058ce949e4211f983e026:resources/views/welcome.blade.php
</html>
>>>>>>> c39d68f1287b61a8d01058ce949e4211f983e026
