<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('asset/home.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<div class="toolbar">
        <div class="menu"></div>
        <div class="botonera">
            <a routerLink="preguntas">
                <div class="boton_toolbar1"></div>
            </a>
            <a routerLink="'/home'">
                <div class="boton_toolbar2"></div>
            </a>
            <a routerLink="preguntas">
                <div class="boton_toolbar3"></div>
            </a>
            <div class="boton_iniciar">
                <a href="{{ route('login')}}">Iniciar Sesión</a>
            </div>
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
        <a class="Cuadro" >
            <h4>Hamburguesas</h4>
            <div class="Productos">
            <img src="{{ asset('/img/Productos/hamburguesa.jpg') }}" alt="hamburguesas" class="imagen">
            </div>
        </a>
        <a class="Cuadro" >
            <h4>Helados</h4>
            <div class="Productos">
            <img src="{{ asset('/img/Productos/helado.jpg') }}" alt="helados" class="imagen">
            </div>
        </a>
        <a class="Cuadro" >
            <h4>Comidas Rapidas</h4>
            <div class="Productos">
            <img src="{{ asset('/img/Productos/comidas rapidas.jpg') }}" alt="comidas-rapidas" class="imagen">
            </div>
        </a>
        <a class="Cuadro" >
            <h4>Bebidas</h4>
            <div class="Productos">
                <<img src="{{ asset('/img/Productos/bebidas.jpg') }}" alt="bebidas" class="imagen">
            </div>
        </a>
        <a class="Cuadro" >
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
</body>
</html>